<?php
session_start();
if(isset($_SESSION["username"])){
}else{
 echo header("location:login.php");
 
}?>

<!DOCTYPE html>
<html>
<head>
    <style>
body {
  background-color: lightcoral;
}
</style>
    <meta charset="utf-8">
    <title>Halaman Dashboard</title>
</head>
<body>
        Selamat Datang Di Login
</body>
</html>
