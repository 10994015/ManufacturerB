<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<header id="header">
<div id="menu"><i class="fa-solid fa-xmark" id="menuicon"></i></div>
        <div id="box">
            <a href="./" id="logo"><img src="./images/logo.png" alt=""><span>MovieEarn</span></a>
            <ul>
                <a href="./messages.php"><img src="./images/btn1.png">訊息公告</a>
                <a href="./notfound.php"><img src="./images/btn2.png">新手教學</a>
                <a href="./login.php"><img src="./images/btn3.png"><?php if(isset($_SESSION['name'])){echo "回到首頁"; }else{echo "會員申請";}?></a>
                <a href="./earn.php"><img src="./images/btn4.png">接取任務</a>
                <a href="./gold.php"><img src="./images/btn5.png">儲存金幣</a>
                <a href="./contact.php"><img src="./images/btn6.png">聯繫客服</a>
            </ul>
            <?php if(isset($_SESSION['name'])){ ?>
            <div class="memberinfo">
                <div><b>帳號</b><p><?php echo $_SESSION['username']; ?></p></div>
                <div><b>餘額</b><p><?php echo $_SESSION['money']; ?></p></div>
                <a href="./member_logout.php" class="logout" style="color:#111">登出</a>
            </div>
            <?php } ?>
        </div>
    </header>
<script>
const menu = document.getElementById('menu');
const header = document.getElementById('header');
const menuicon = document.getElementById('menuicon');

menu.addEventListener('click', ()=>{
    console.log(1);
    
    if(header.style.left === "-300px"){
        header.style.left = "0px";
        menuicon.className = "fa-solid fa-xmark";
        return;
    }
    header.style.left = "-300px";
    menuicon.className = "fa-solid fa-bars";
});
</script>