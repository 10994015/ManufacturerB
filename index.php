<?php 
require_once('./conn.php');
if( !isset($_SESSION) ){
    session_start();
    try{
    }
    catch(PDOException $e){
        die('Error!:'.$e->getMessage());
      }

}

?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>MovieEarn</title>
    <style>
    
</style>
</head>
<body>
<div id="app">
    <?php include_once('./header.php'); ?>
    <div class="top">
        <img src="./images/B002.png">
        <div><img src="./images/B003.png" alt=""></div>
        <a href="./earn.php" id="goBtn"><img src="./images/B004.png"></a>
    </div>
    <div class="center" id="center">
      <img src="./images/01.png" alt="">
      <img src="./images/02.png" alt="">
      <img src="./images/03.png" alt="">
      <img src="./images/04.png" alt="">
      <img src="./images/05.png" alt="">
      <div>
        <i class="fa-solid fa-circle-chevron-left" id="left"></i>
        <i class="fa-solid fa-circle-chevron-right" id="right"></i>
      </div>
    </div>
</div>
<div class="bottom">
    <h1>公司簡介</h1>
    <p>網路賺錢方式非常多種,但是你知道有一種方式是不用花任何成本,可能一天只需要抽出十分左
右就能賺錢的方式嗎?這正是我們網路賺錢方式:「PTC」。<br />
從21世紀初起PTC網站開始一家一家的立。這些網站最主要的目的是讓廣告主付錢網站上刊
登廣告,並讓會員或瀏覽者在網站上觀看廣告,藉此達成廣告主、會員、PTC網站三贏的局面。<br /><br />

點擊廣告是 PTC網站最原始的賺錢方法,只需要台上的廣告,即可得0.001~0.01美元不等每個網
站的支付率都不同)但是每天可能只有不到30個的廣告,因此長期下來收益並不大。<br /><br />

先來解釋一下PTC PTC全名是「Pay To Click」,意思就你只要擊廣告,平台就付錢
給你而後PTC平台覺得單純擊廣告太單純、太無趣,所以衍生出其他不同的玩法。<br /><br />

Movie Earn 成立於2018年,從原本單純的PTC 網站(只有點擊廣告功能),
由於大家生活習慣不斷改變，聽音樂成為大家打發時間或是通勤時的最佳紓壓管道
一直到2022才取消點擊廣告的功能<br />
並更改為觀看影集的方式供用戶提供賺錢管道</p>

</div>
<?php include_once('./footer.php'); ?>
   
<script src="app.js"></script>
</body>
</html>