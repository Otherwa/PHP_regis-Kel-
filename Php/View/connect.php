<?php
function get_con()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "kelkar_forms";
    $connect = mysqli_connect($host, $user, $password, $dbname);
    return $connect;
}
$status = "online";
?>

<!doctype html>