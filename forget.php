<?php
session_start();
include_once('./conn.php');

if (isset($_SESSION['name'])) {
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>MovieEarn</title>
    <style>
        body{
            background-color: #121212;
            color:#fff;
        }
        .content{
            width:100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
        }
        
        .content > .gold > img{
            width:350px;
            height: 350px;
            margin: 15px 0;
        }
        .content > .gold > p{
            font-weight: 600;
            margin:5px 0;
        }
        .content > .gold > p >a {
            color:#fff;
        }
       
    </style>
</head>
<body>
<?php include_once('./header.php'); ?>
    <div class="content">
        <div class="gold">
            <h2>忘記密碼加入客服Line並協助開單</h2>
            <img src="./images/line.jpg" alt="">
            <p>LINE ID: love22001</p>
            <p>網址: <a href="https://line.me/ti/p/V3KeyNKf0K#~">https://line.me/ti/p/V3KeyNKf0K#~</a></p>
        </div>
    </div>

    <?php include_once('./footer.php'); ?>
    <script src="script.js"></script>
</body>
</html>

<?php
}else{

?>
<?php include_once('./error.php') ?>
<?php } ?>