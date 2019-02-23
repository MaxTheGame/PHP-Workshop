<?php
session_start();
session_destroy();//ทำลาย session

//ไปหน้า
header("Location: login.php");
?>