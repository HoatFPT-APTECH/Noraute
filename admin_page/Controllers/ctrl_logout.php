<?php
session_start();
unset($_SESSION["loginedAdmin"]);
header("Location:http://localhost/Noraute/admin_page/login.php")
?>