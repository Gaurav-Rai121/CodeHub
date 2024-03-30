<?php
session_start();

session_destroy();
header("location:/forum/home.php");
?>