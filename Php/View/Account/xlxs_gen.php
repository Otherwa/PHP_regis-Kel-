<?php
//export.php  
include('../connect.php');

$con = get_con();
$output = "QUERY";
if (isset($_POST["export"])) {

     $review = array();
     $con = get_con();

     // store data in 2x2
     for ($a = 11; $a < 29; $a++) {
          $temp_array = array();
          for ($rate = 1; $rate < 7; $rate++) {
               $query = "SELECT COUNT(a" . $a  . ") as count1 from answerpats WHERE tname =\"" . $_POST["teacher"] . "\" AND cname=\"" . $_POST["class"] . "\" AND sem=\"" . $_POST["sem"] .  "\" AND subject=\"" . $_POST["subject"] . "\""  . " AND a" . $a . "=\"" . $rate . "\";";
               $result = mysqli_query($con, $query);
               $result = mysqli_fetch_assoc($result);
               array_push($temp_array, $result['count1']);
          }
          array_push($review, $temp_array);
     }

     $total = Get_count();
     $total_count = filter($review);
     for ($b = 0; $b < 6; $b++) {
          echo "rating " . ($b + 1) . " = percent " . ($total_count[$b] * 100 / $total) . "             actual count $total_count[$b] <br>";
     }
}


// functions

// get count number filter
function filter($review)
{
     $total_count = array();
     for ($b = 0; $b < 6; $b++) {
          $temp = 0;
          for ($rate = 0; $rate < 18; $rate++) {
               $temp += (int) $review[$rate][$b];
          }
          array_push($total_count, $temp);
     }
     return $total_count;
}

// total number
function Get_count()
{
     $con = get_con();
     $total_qus = 18;

     $query = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_POST['teacher'] . "\"AND subject =\"" . $_POST['subject'] . "\";";
     $result = mysqli_query($con, $query);
     $result = mysqli_fetch_array($result);

     $result = $result['count1'];
     echo $result * $total_qus . "<br>";
     return ($result * $total_qus);
}
?>
<!doctype html>