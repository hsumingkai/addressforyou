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

    public function __construct(Add_vill_twd97 $address_vill_twd97, Realdata $realdata)
    {
        $this->address_vill_twd97 = $address_vill_twd97;
        $this->realdata = $realdata;
    }


    /**
     */
    public function index()
    {
        return view('address.index');
    }
    public function landlordSearch()
    {
        return view('address.landlordSearch', ['type' => 'landlord']);
    }
    public function landlordResult()
    {
        return view('address.landlordResult');
    }

    public function shopownerSearch()
    {
        return view('address.shopownerSearch', ['type' => 'shopowner']);
    }
    public function shopownerResult()
    {
        return view('address.shopownerResult');
    }

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
    // http://localhost/shopowner/latlng/25.035856,121.445466/address/%E4%B8%AD%E6%AD%A3%E8%B7%AF334%E5%B7%B723%E8%99%9F/industry/F201010
    public function findShopownerResponse(Request $request, $latlng, $address, $industry)
    {
        $lat = explode(',', $latlng)[0];
        $lng = explode(',', $latlng)[1];
        $selectPosition = $this->findPosition($address, $lat, $lng, $industry);
        //找到推薦店面
        $recommendedstores = $this->findRecommendedStores($selectPosition[0]->x, $selectPosition[0]->y, $industry, 500);
        //此地點行業分布
        $nearIndustryDistribution = $this->findnearIndustryDistribution($selectPosition[0]->x, $selectPosition[0]->y, 500);
        //此地點的租金行情
        $nearRent = $this->findNearRent($selectPosition[0]->x, $selectPosition[0]->y, 500);
        return response()->json([
            'recommendedstores' => $recommendedstores,
            'nearIndustryDistribution' => $nearIndustryDistribution,
            'nearRent' => $nearRent
        ]);
    }
    protected function findRecommendedIndustryByNo($no)
    {
        return $this->realdata->where('no', $no)->get();
    }
    protected function findRecommendedStores($x, $y, $industry, $distance)
    {
        return DB::select("SELECT * from address.add_vill_twd97 WHERE $industry =1 HAVING (POW( POW( ( $x - x ) , 2 ) + POW(  $y  - y, 2 ) , 0.5 )) < $distance ORDER BY RAND() LIMIT 5");
    }

    protected function findPosition($address, $lat, $lng)
    {
        //http://localhost/landlord/latlng/25.035856,121.445466/address/%E4%B8%AD%E6%AD%A3%E8%B7%AF334%E5%B7%B723%E8%99%9F
        $record = $this->findPositionByAddress($address);
        if (!$record->isEmpty()) {
            return $record;
        } else {
            //http://localhost/landlord/latlng/25.034807,121.443749/address/%E6%96%B0%E8%8E%8A%E5%8D%80%E5%BF%A0%E5%AD%9D%E8%A1%979%E8%99%9F
            $record = $this->findPositionByLnglat($lat, $lng);
            return $record;
        }
    }

    protected function findPositionByAddress($address)
    {
        return $this->address_vill_twd97->where('address', $address)->get();
    }

    protected function findPositionByLnglat($lat, $lng)
    {
        return DB::select("SELECT * ,  ( 3959 * acos( cos( radians(?) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(?) ) + sin( radians($lat) ) * sin(radians(lat)) ) ) as distance FROM address.add_vill_twd97 having distance<2000  order by distance limit 1 ", [$lat, $lng]);
    }
    protected function findnearIndustryDistribution($x, $y, $distance)
    {
        $nearIndustries = $this->findNearIndustries($x, $y, $distance);

        return $this->calcIndustryDistribution($nearIndustries);
    }

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
    protected function findNearIndustries($x, $y, $distance)
    {
        return DB::select("SELECT `NO`, `F201010`, `F203010`, `F203020`, `F204110`, `F205040`, 
        `F206010`, `F206020`, `F206030`, `F206040`, `F207030`, `F208040`, `F208050`, `F209060`,
        `F211010`, `F213010`, `F213030`, `F213060`, `F213080`, `F213990`, `F214020`, `F214030`,
        `F214050`, `F215010`, `F218010`, `F219010`, `F399010`, `F501030`, `F501060`, `JE01010`,
        `JZ99080`, `地址`, `資本額`, x, y 
        FROM address.rowdata HAVING (POW( POW( ( ? - x ) , 2 ) + POW( ? - y, 2 ), 0.5 )) < ? ", [$x, $y, $distance]);
    }


    protected function findNearRent($x, $y, $distance)
    {
        return DB::select("SELECT  * FROM address.realrent Group by   HAVING (POW( POW( ( ? - x ) , 2 ) + POW( ? - y, 2 ) , 0.5 )) < ? limit 15 ", [$x, $y, $distance]);
    }
}
