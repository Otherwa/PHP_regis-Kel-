<?php
function get_con()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "regis_dat";
    $connect = mysqli_connect($host, $user, $password, $dbname);
    return $connect;
}
?>
<!doctype html>