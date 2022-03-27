<?php
session_start();
include_once('./conn.php');

if (isset($_SESSION['name'])) {
    if(isset($_GET['id']) && $_GET['id'] != ""){
        try{
            $sql_str = "SELECT * FROM messages WHERE id = :id";
            $stmt = $conn -> prepare($sql_str);
            $id = $_GET['id'];
            $stmt -> bindParam(':id',$id);
            $stmt -> execute();
            $total = $stmt -> rowCount();
            if($total>=1){
                $row_RS = $stmt -> fetch(PDO::FETCH_ASSOC);
            }
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
    <link rel="stylesheet" href="post.css">
    <title>MovieEarn</title>
</head>
<body>

<?php include_once('./header.php'); ?>
   <div class="post">
       <div class="content">
        <h2><?php echo $row_RS['title']; ?></h2>
        <img src="./images/01.png" alt="">
        <small><?php echo $row_RS['time']; ?></small>
        <p><?php echo nl2br($row_RS['content']); ?></p>
        <div id="className"><?php  if($row_RS['post']==1){echo "綜合";}elseif($row_RS['post']==2){echo "活動";}else{echo "更新";} ?></div>
     </div>
   </div>
   <?php include_once('./footer.php'); ?>
    <script src="script.js"></script>
    <script src="messages.js"></script>
    <script>
    window.onload = function(){
        const className = document.getElementById('className');
        if(className.innerText==="綜合"){
            className.style.border = "1px  blue solid";
            className.style.color = "blue";
        }else if(className.innerText==="活動"){
            className.style.border = "1px  red solid";
            className.style.color = "red";
        }else{
            className.style.border = "1px  green solid";
            className.style.color = "green";
        }
    }
    </script>
</body>
</html>

<?php
}else{

?>
<?php include_once('./error.php') ?>
<?php } ?>
