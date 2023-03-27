<?php
// Include config file
$conn=require_once "config.php";

$sql = "UPDATE `book` SET `book.takeNum` = `shop.takeNum` ,`book.shop_id` = `shop.shop_id` FROM shop WHERE `book.username` = 'user1' AND `shop.shopid` = 1";
$result=mysqli_query($conn,$sql);
$sql = "SELECT * FROM `book` WHERE `shop_id` = 1 ";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc ( $result ) ;

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登入介面</title>
<meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css"/></noscript>
</head>
<header id="header">
      <a href="index.html" class="title">餐廳預約系統</a>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="generic.html" class="active">取號</a></li>
          <li><a href="elements.html">叫號查詢</a></li>
        </ul>
      </nav>
    </header>
<body>
    <H1>叫號結果</H1>
    <?php
        printf ( "現在的叫號號碼是%s 號" , $row ["takeNum"] ) ;
    ?>
</body>

    <!-- Footer -->
    <footer id="footer" class="wrapper alt">
      <div class="inner">
        <ul class="menu">
          <li>&copy; 2022 All rights reserved.</li>
        </ul>
      </div>
    </footer>
</html>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>