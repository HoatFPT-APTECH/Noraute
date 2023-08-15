<?php
session_start();
unset($_SESSION["loginedAdmin"]);
header("Location:http://localhost:8181/Noraute/admin_page/login.php")
?>