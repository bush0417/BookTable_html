<?php
// Include config file
$conn=require_once "config.php";

$sql = "SELECT * FROM `shop` WHERE `shop_id` = 4 ORDER BY `shop`.`shop_id` ASC LIMIT 0, 30 ";
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
          <li><a href="book.html">取號</a></li>
          <li><a href="call.html" class="active">叫號查詢</a></li>
        </ul>
      </nav>
    </header>
<body>
    <H1>餐廳資訊</H1>     
    <H2>尚品咖啡高師大店</H2>
    <P>
        地址<br>高雄市苓雅區四維二路88號<br>連絡電話<br>07 721 3918
    </P>
    <H1>叫號進度</H1>
    <?php
        printf ( "下一個叫號號碼是%s 號" , $row ["nextNum"] ) ;
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