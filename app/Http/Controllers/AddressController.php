<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Add_vill_twd97;
use App\Realdata;

class addressController extends Controller
{
    protected $address_vill_twd97;
    protected $realdata;

    /**
     * _construct function
     * @param Add_vill_twd97 $address_vill_twd97
     * @param Realdata $realdata
     */
    public function __construct(Add_vill_twd97 $address_vill_twd97, Realdata $realdata)
    {
        $this->address_vill_twd97 = $address_vill_twd97;
        $this->realdata = $realdata;
    }

    /**
     * 首頁
     * @return view
     */
    public function index()
    {
        return view('address.index');
    }

    /**
     * 房東搜尋頁
     * @return view
     */
    public function landlordSearch()
    {
        return view('address.landlordSearch', ['type' => 'landlord']);
    }

    /**
     * 房東結果頁
     * @return view
     */
    public function landlordResult()
    {
        return view('address.landlordResult');
    }

    /**
     * 創業搜尋頁
     * @return view
     */
    public function shopownerSearch()
    {
        return view('address.shopownerSearch', ['type' => 'shopowner']);
    }

    /**
     * 創業結果頁
     * @return view
     */

    public function shopownerResult()
    {
        return view('address.shopownerResult');
    }

    /**
     * 給房東搜尋頁api 
     * @param Request $request
     * @param [type] $latlng @example 'lat,lng'
     * @param [type] $address
     * @example http://localhost/shopowner/latlng/25.035856,121.445466/address/%E4%B8%AD%E6%AD%A3%E8%B7%AF334%E5%B7%B723%E8%99%9F
     * @return JSON 
     */
    public function findLandlordResponse(Request $request, $latlng, $address)
    {
        $lat = explode(',', $latlng)[0];
        $lng = explode(',', $latlng)[1];
        $selectPosition = $this->findPosition($address, $lat, $lng);
        $no = $selectPosition[0]->no;
        //此地點推薦行業
        $recommendedIndustries = $this->findRecommendedIndustryByNo($no);
        //此地點行業分布
        $nearIndustryDistribution = $this->findnearIndustryDistribution($selectPosition[0]->x, $selectPosition[0]->y, 500);
        //此地點的租金行情
        $nearRent = $this->findNearRent($selectPosition[0]->x, $selectPosition[0]->y, 500);

        return response()->json([
            'recommendedIndustry' => $recommendedIndustries[0],
            'nearIndustryDistribution' => $nearIndustryDistribution,
            'nearRent' => $nearRent
        ]);
    }

    /**
     * 給創業搜尋頁api 
     * @param Request $request
     * @param [type] $latlng @example 'lat,lng'
     * @param [type] $address
     * @param [type] $industry
     * @example http://localhost/shopowner/latlng/25.035856,121.445466/address/%E4%B8%AD%E6%AD%A3%E8%B7%AF334%E5%B7%B723%E8%99%9F/industry/F201010
     * @return JSON
     */
    public function findShopownerResponse(Request $request, $latlng, $address, $industry)
    {
        $lat = explode(',', $latlng)[0];
        $lng = explode(',', $latlng)[1];
        $selectPosition = $this->findPosition($address, $lat, $lng, $industry);
        $recommendedstores = $this->findRecommendedStores($selectPosition[0]->x, $selectPosition[0]->y, $industry, 500);
        $nearIndustryDistribution = $this->findnearIndustryDistribution($selectPosition[0]->x, $selectPosition[0]->y, 500);
        $nearRent = $this->findNearRent($selectPosition[0]->x, $selectPosition[0]->y, 500);
        return response()->json([
            'recommendedstores' => $recommendedstores,
            'nearIndustryDistribution' => $nearIndustryDistribution,
            'nearRent' => $nearRent
        ]);
    }

    /**
     * 從$no找推薦職業
     * @param [type] $no
     * @return Collection 
     */
    protected function findRecommendedIndustryByNo($no)
    {
        return $this->realdata->where('no', $no)->get();
    }

    /**
     * 找出適合的店面
     * @param [type] $x
     * @param [type] $y
     * @param [type] $industry
     * @param [type] $distance
     * @return Collection
     */
    protected function findRecommendedStores($x, $y, $industry, $distance)
    {
        return DB::select("SELECT * from address.add_vill_twd97 WHERE $industry =1 HAVING (POW( POW( ( $x - x ) , 2 ) + POW(  $y  - y, 2 ) , 0.5 )) < $distance ORDER BY RAND() LIMIT 5");
    }

    /**
     * 從地址or座標找出選使用者的地點資訊
     * @param [type] $address
     * @param [type] $lat
     * @param [type] $lng
     * @return Collection
     */
    protected function findPosition($address, $lat, $lng)
    {
        $record = $this->findPositionByAddress($address);
        if (!$record->isEmpty()) {
            return $record;
        } else {
            $record = $this->findPositionByLnglat($lat, $lng);
            return $record;
        }
    }

    /**
     * 從地址找地點資訊
     * @param [type] $address
     * @return Collection
     */
    protected function findPositionByAddress($address)
    {
        return $this->address_vill_twd97->where('address', $address)->get();
    }

    /**
     * 從座標找地點資訊
     * @param [type] $lat
     * @param [type] $lng
     * @return Collection
     */
    protected function findPositionByLnglat($lat, $lng)
    {
        return DB::select("SELECT * ,  ( 3959 * acos( cos( radians(?) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(?) ) + sin( radians($lat) ) * sin(radians(lat)) ) ) as distance FROM address.add_vill_twd97 having distance<2000  order by distance limit 1 ", [$lat, $lng]);
    }

    /**
     * 從地點位置(twd97)找出地點附近的所有商店資料，並統計
     * @param [type] $x
     * @param [type] $y
     * @param [type] $distance
     * @return Array
     */
    protected function findnearIndustryDistribution($x, $y, $distance)
    {
        $nearIndustries = $this->findNearIndustries($x, $y, $distance);

        return $this->calcIndustryDistribution($nearIndustries);
    }

    /**
     * 找出附近的所有店家資料
     * @param [type] $x
     * @param [type] $y
     * @param [type] $distance
     */
    protected function findNearIndustries($x, $y, $distance)
    {
        return DB::select("SELECT `NO`, `F201010`, `F203010`, `F203020`, `F204110`, `F205040`, 
        `F206010`, `F206020`, `F206030`, `F206040`, `F207030`, `F208040`, `F208050`, `F209060`,
        `F211010`, `F213010`, `F213030`, `F213060`, `F213080`, `F213990`, `F214020`, `F214030`,
        `F214050`, `F215010`, `F218010`, `F219010`, `F399010`, `F501030`, `F501060`, `JE01010`,
        `JZ99080`, `地址`, `資本額`, x, y 
        FROM address.rowdata HAVING (POW( POW( ( ? - x ) , 2 ) + POW( ? - y, 2 ), 0.5 )) < ? ", [$x, $y, $distance]);
    }

    /**
     * 統計商店種類分布
     * @param [type] $nearIndustries
     * @return Array
     */
    protected function calcIndustryDistribution($nearIndustries)
    {
        $IndustryDistribution = array(
            'F201010' => 0, 'F203010' => 0, 'F203020' => 0, 'F204110' => 0,
            'F205040' => 0, 'F206010' => 0, 'F206020' => 0, 'F206030' => 0,
            'F206040' => 0, 'F207030' => 0, 'F208040' => 0, 'F208050' => 0,
            'F209060' => 0, 'F211010' => 0, 'F213010' => 0, 'F213030' => 0,
            'F213060' => 0, 'F213080' => 0, 'F213990' => 0, 'F214020' => 0,
            'F214030' => 0, 'F214050' => 0, 'F215010' => 0, 'F218010' => 0,
            'F219010' => 0, 'F399010' => 0, 'F501030' => 0, 'F501060' => 0,
            'JE01010' => 0, 'JZ99080' => 0
        );
        foreach ($nearIndustries as $nearIndustry) {
            foreach ($IndustryDistribution as $key => $value) {
                $IndustryDistribution[$key] = $IndustryDistribution[$key] + $nearIndustry->$key;
            }
        }
        return $IndustryDistribution;
    }

    /**
     * 找到附近租金的情況
     * @param [type] $x
     * @param [type] $y
     * @param [type] $distance
     * @return Collection
     */
    protected function findNearRent($x, $y, $distance)
    {
        return DB::select("SELECT  * FROM address.realrent Group by title HAVING (POW( POW( ( ? - x ) , 2 ) + POW( ? - y, 2 ) , 0.5 )) < ? limit 15 ", [$x, $y, $distance]);
    }
}
