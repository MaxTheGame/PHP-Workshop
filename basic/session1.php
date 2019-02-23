<?php
session_start(); //ต้องอยู่บนตลอด

$username = $_POST['username'];
//echo $username;

$_SESSION['uName'] = $username; //รับค้่าจาก Session


//Form เอาไว้ส่งค่าไปหน้านั้น
?>
<form action="session1.php" method="post">
   Username: <input type="text" name="username">
   <input type="submit" value="OK">
   </form>
    