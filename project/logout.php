<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["user"]);
unset($_SESSION["img1"]);
unset($_SESSION["sec_id"]);
header("Location:login.php");
?>