<?php
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: location:index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>叫號介面</title>
<meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript
      ><link rel="stylesheet" href="assets/css/noscript.css"
    /></noscript>
</head>
<body>
    <h1>叫號</h1>
<form method="post" action="call.php">
shop id：
<input type="text" name="shop_id"><br/><br/>
<input type="submit" value="登入" name="submit"><br><br>
</form>
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
   

