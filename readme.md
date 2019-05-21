<p align="center"><img src="http://addressforyou.tk/img/head.png"></p>


# About AddressForYou

AddressForYou 是一個選址分析系統，用於判斷某地點適不適合特定的行業，給予使用者快速的篩選機制，本系統實作台灣新北市新莊區。本系統主要考慮了：

- 附近的商店行業分布，並分析各行業適合群聚或是分散
- 附近的公共場所，像是:捷運、公車站牌、公園、廟宇等...一百多種的公共場所
- 附近的里民的收入水平、教育水準、人口密度等...里的相關資料

#

# Feature
- 幫助創業者快速找出這附近有沒有適合他們要開的店行業的位置
- 幫助房東確認他的店面比較適合給哪個行業
# Demo
- http://addressforyou.tk
#
# 技術實作
> 因為這是舊的專案，所以主要目的將其專案整個重構，將原本雜亂Legacy Code進行重構
- 用Laravel框架(PHP框架)，把原本的義大利面程式碼拆德更有架構，讓其系統之後方便擴充功能，並連接MySql資料庫
- 用Bootstrap(Css Framework)快速建立RWD網頁功能
- 用google map web api, d3.js 來清楚呈現分析結果，方便使用者來觀察
- 用MySql架設資料庫將儲存全新莊區將近6萬筆的分析結果
- 用docker技術，基礎將local開發端和server端的環境整合
- 用Amazon Elastic Compute Cloud (Amazon EC2) 來架設Laravel Application

# 詳細開發技術

領域           | 技術  |
--------------|:-----|
Framework | [Laravel](https://laravel.com/) |
後端  | [PHP](https://www.php.net/docs.php) |
前端技術| Javascript, Css, Html, RWD|
第三方套件    | [Google Map Web Api](https://developers.google.com/maps/documentation/javascript/tutorial?hl=zh-TW), [Boostrap 4](https://getbootstrap.com/)|
資料庫|[MySQL](https://www.mysql.com/)|
前端開發工具    | [Sass](https://sass-lang.com/), [Npm](https://www.npmjs.com/), [Blade Template](https://laravel.com/docs/5.8/blade) |
環境架設|[Docker](https://www.docker.com/), [Laradock](https://laradock.io/)|
Could Service|[Amazon EC2](https://aws.amazon.com/tw/ec2/)|


# Todo List

## View
- 將View 切得更乾淨
- 導入Vue.js 將前端架構化

## Feature
- 導入會員系統讓使用者可以紀錄搜尋紀錄
- 導入修正模式，如果定位不準確可以修正

## Web Server
- 導入HTTPS 

## Testing
- 導入Unit Test(PHPUnit)

## Cloud Service
- 將原本的資料庫，遷移到Amazon RDS or(原本在Mysql Contaienr無法確定其資料保存)
- 將圖片檔案移至Amazon S3

## Github
- 整理分支，用Github Flow

## DevOps 
- 讓Github master 更新即可上傳至EC2