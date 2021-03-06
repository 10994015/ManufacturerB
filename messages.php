<?php
session_start();
include_once('./conn.php');



    try{
        $sql_str = "SELECT * FROM messages ORDER BY id DESC";
        $RS_mb = $conn -> query($sql_str);
        $total_RS_mb = $RS_mb -> rowCount();

        $sql_str1 = "SELECT * FROM messages WHERE post=1 ORDER BY id DESC";
        $RS_mb1 = $conn -> query($sql_str1);
        $total_RS_mb1 = $RS_mb1 -> rowCount();

        $sql_str2 = "SELECT * FROM messages WHERE post=2 ORDER BY id DESC";
        $RS_mb2 = $conn -> query($sql_str2);
        $total_RS_mb2 = $RS_mb2 -> rowCount();

        $sql_str3 = "SELECT * FROM messages WHERE post=3 ORDER BY id DESC";
        $RS_mb3 = $conn -> query($sql_str3);
        $total_RS_mb3 = $RS_mb3 -> rowCount();
      
    
        
    
        
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
    <link rel="stylesheet" href="messages.css">
    <title>MovieEarn</title>
</head>
<body>

<?php include_once('./header.php'); ?>
    <div class="messages">
      <div class="title">
          <img src="./images/logo.png" alt="">
          <h1>最新消息</h1>
      </div>
      <div class="class">
          <p>分類:</p>
          <div class="classbtn"><span class='chkbox'><p class="chkok" style="display:block"></p></span>全部</div>
          <div class="classbtn"><span class='chkbox'><p class="chkok"></p></span>綜合</div>
          <div class="classbtn"><span class='chkbox'><p class="chkok"></p></span>活動</div>
          <div class="classbtn"><span class='chkbox'><p class="chkok"></p></span>更新</div>
      </div>
      <div class="post" id="post1">
      </div>
      <div class="post" id="post2">
      <?php foreach($RS_mb1 as $item){ ?>
          <div class="item">
              <img src="<?php echo $item['img']; ?>" alt="">
              <div class="content">
                  <h2><?php echo $item['title'];?>!</h2>
                  <small><?php echo $item['time'];?></small>
                  <p><?php echo $item['content'];?></p>
                  <a href="./post.php?id=<?php echo $item['id'];?>" class="moer">MORE...</a>
                </div>
                <div class="className">
                    <?php if($item['post'] == 1){echo "綜合";}elseif($item['post']==2){echo "活動";}else{echo "更新";} ?>
                </div>
          </div>
        <?php } ?>
      </div>
      <div class="post" id="post3">
      <?php foreach($RS_mb2 as $item){ ?>
          <div class="item">
              <img src="<?php echo $item['img']; ?>" alt="">
              <div class="content">
                  <h2><?php echo $item['title'];?>!</h2>
                  <small><?php echo $item['time'];?></small>
                  <p><?php echo $item['content'];?></p>
                  <a href="./post.php?id=<?php echo $item['id'];?>" class="moer">MORE...</a>
                </div>
                <div class="className">
                    <?php if($item['post'] == 1){echo "綜合";}elseif($item['post']==2){echo "活動";}else{echo "更新";} ?>
                </div>
          </div>
        <?php } ?>
      </div>
      <div class="post" id="post4">
      <?php foreach($RS_mb3 as $item){ ?>
          <div class="item">
              <img src="<?php echo $item['img']; ?>" alt="">
              <div class="content">
                  <h2><?php echo $item['title'];?>!</h2>
                  <small><?php echo $item['time'];?></small>
                  <p><?php echo $item['content'];?></p>
                  <a href="./post.php?id=<?php echo $item['id'];?>" class="moer">MORE...</a>
                </div>
                <div class="className">
                    <?php if($item['post'] == 1){echo "綜合";}elseif($item['post']==2){echo "活動";}else{echo "更新";} ?>
                </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <?php include_once('./footer.php'); ?>
    <script src="script.js"></script>
    <script src="messages.js"></script>
</body>
</html>

