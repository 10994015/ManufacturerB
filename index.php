<?php 
require_once('./conn.php');
if( !isset($_SESSION) ){
    session_start();
    try{
        $sql_str = "SELECT * FROM messages  ORDER BY id DESC limit 5";
        $RS_mb = $conn -> query($sql_str);
        $total_RS_mb = $RS_mb -> rowCount();

        $sql_str1 = "SELECT * FROM messages  WHERE post=1 ORDER BY id DESC limit 5";
        $RS_mb1 = $conn -> query($sql_str1);

        $sql_str2 = "SELECT * FROM messages  WHERE post=2 ORDER BY id DESC limit 5";
        $RS_mb2 = $conn -> query($sql_str2);

        $sql_str3 = "SELECT * FROM messages  WHERE post=3 ORDER BY id DESC limit 5";
        $RS_mb3 = $conn -> query($sql_str3);
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
    <title>Movieearn</title>
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
<footer>
    footer
    
</footer>
   
<script src="app.js"></script>
</body>
</html>