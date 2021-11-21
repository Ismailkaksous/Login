<?php
session_start();
unset($_SESSION["LoggedUser"]);
header('location:login.php');
?>