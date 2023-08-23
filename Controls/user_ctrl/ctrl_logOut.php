<?php
session_start();
unset($_SESSION["logined"]);
header("Location:http://localhost/Noraute/index.php");
?>