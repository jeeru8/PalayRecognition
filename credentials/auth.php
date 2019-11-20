<?php
session_start();
if(!isset($_SESSION["user"])){
header("Location: ./404.php");
exit(); }
?>