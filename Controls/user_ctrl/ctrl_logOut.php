<?php
session_start();
unset($_SESSION["logined"]);
header("Location:http://localhost:8181/Noraute/index.php");
?>