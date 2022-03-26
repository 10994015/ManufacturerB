<?php
session_start();
include_once('./conn.php');

if (isset($_SESSION['name'])) {

    try{
        $sql_str = "SELECT * FROM messages ORDER BY id DESC";
        $RS_mb = $conn -> query($sql_str);
        $total_RS_mb = $RS_mb -> rowCount();
    }
    catch(PDOException $e){
        die('Error!:'.$e->getMessage());
      }
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="post.css">
    <title>MovieEarn</title>
</head>
<body>

<?php include_once('./header.php'); ?>
   <div class="post">
       <div class="content">
        <h2>0322太陽的悲願登場!</h2>
        <img src="./images/01.png" alt="">
        <small>2022/03/22</small>
        <p>內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文內文</p>
        <div>更新</div>
     </div>
   </div>
   <?php include_once('./footer.php'); ?>
    <script src="script.js"></script>
    <script src="messages.js"></script>
</body>
</html>

<?php
}else{

?>
<?php include_once('./error.php') ?>
<?php } ?>
