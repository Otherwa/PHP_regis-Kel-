<?php
ob_start();
session_start();
session_destroy();
header("Location:adminlogin.php");
ob_end_flush();
?>
<!doctype html>