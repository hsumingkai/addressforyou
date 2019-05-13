<p align="center"><img src="http://addressforyou.tk/img/head.png"></p>


## About AddressForYou

AddressForYou 是一個選址分析系統，用於判斷某地點適不適合特定的行業，給予使用者快速的篩選機制，本系統實作台灣新北市新莊區。本系統主要考慮了：

- 附近的商店行業分布，並分析各行業適合群聚或是分散
- 附近的公共場所，像是:捷運、公車站牌、公園、廟宇等...一百多種的公共場所
- 附近的里民的收入水平、教育水準、人口密度等...里的相關資料

## Feature
- 幫助創業者快速找出這附近有沒有適合他們要開的店行業的位置
- 幫助房東確認他的店面比較適合給哪個行業
#
## 技術實作
> 因為這是舊的專案，所以主要目的將其專案整個重構，將原本雜亂Legacy Code進行重構

- 用bootstrap css framework快速建立RWD網頁功能
- 用google map web api, d3.js 來清楚呈現分析結果，方便使用者來觀察
- 用Laravel框架，把原本的義大利面程式碼拆德更有架構，讓其系統之後方便擴充功能
- 用MySql架設資料庫將儲存全新莊區的分析結果
- 用docker技術，基礎將local開發端和server端的環境整合
- 用Amazon Elastic Compute Cloud (Amazon EC2) 來架設Laravel Application

## 詳細開發技術


領域           | 技術  |
--------------|:-----|
前端技術    | Javascript, Css, Html|
第三方套件    | Google Map Web Api, Bootstrap|
前端開發工具    | Scss, Npm, Blade Template, |
後端技術  | Laravel, PHP |
資料庫|Mysql|
環境架設|Docker, Laradock|
Could Service|Amazon EC2|



<table>
    <tr>
        <td>Foo</td>
        <td>Foo</td>
    </tr>
    <tr>
        <td>Foo</td>
        <td>Foo</td>
    </tr>
    <tr>
        <td>Foo</td>
        <td>Foo</td>
    </tr>
    <tr>
        <td>Foo</td>
        <td>Foo</td>
    </tr>
    <tr>
        <td>Foo</td>
        <td>Foo</td>
    </tr>
    <tr>
        <td>Foo</td>
        <td>Foo</td>
    </tr>
    </table>




## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).