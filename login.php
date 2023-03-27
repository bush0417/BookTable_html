<?php
// Include config file
$conn=require_once "config.php";
 
$username=$_POST["username"];
$password=$_POST["password"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT * FROM user WHERE username ='".$username."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1 && $password==mysqli_fetch_assoc($result)["password"]){
        session_start();
        $_SESSION["username"] = mysqli_fetch_assoc($result)["username"];
        header("location:html/index.html");
    }else{
            function_alert("username or password wrong"); 
        }
}
    else{
        function_alert("Something wrong"); 
    }

    // Close connection
    mysqli_close($link);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    return false;
} 
?>