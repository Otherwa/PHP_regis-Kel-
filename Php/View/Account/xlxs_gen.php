<?php
//export.php  
include('../connect.php');

$con = get_con();
$output = "QUERY";
if (isset($_POST["export"])) {


     $review = array(); // store data
     $con = get_con();

     // store data in 2x2
     echo "2x2 Store <br>";
     for ($a = 11; $a < 29; $a++) {
          $temp_array = array();
          echo "<br>";
          for ($rate = 1; $rate < 8; $rate++) {
               $query = "SELECT COUNT(a" . $a  . ") as count1 from answerpats WHERE tname =\"" . $_POST["teacher"] . "\" AND cname=\"" . $_POST["class"] . "\" AND sem=\"" . $_POST["sem"] .  "\" AND subject=\"" . $_POST["subject"] . "\""  . " AND a" . $a . "=\"" . $rate . "\";";
               $result = mysqli_query($con, $query);
               $result = mysqli_fetch_assoc($result);
               echo " " . $result['count1'];
               array_push($temp_array, $result['count1']);
          }
          array_push($review, $temp_array);
     }

     $total = Get_count();
     if ($total == 0) {
          session_start();
          header('Location: admin.php');
          $_SESSION['name'] = "error";
     }
     Get_Question_Rating($review, $total);

     // $total_count = filter($review);
     // for ($b = 0; $b < 7; $b++) {
     //      // echo "rating " . ($b + 1) . " = percent " . ($total_count[$b] * 100 / $total) . "             actual count $total_count[$b] <br>";
     // } used in char generation
}


// functions

function Get_Question_Rating($review, $total)
{
     $choice = array("very-poor", "poor", "below-average", "average", "good", "very-good", "excellent");
     for ($a = 0; $a < 18; $a++) {
          echo "<br> For Question" . ($a + 11) . "<br> in database";
          echo "<br>";
          for ($rate = 0; $rate < 7; $rate++) {
               echo "rating " . ($choice[$rate]) . " = percent " . ($review[$a][$rate] * 100 / $total) . "<br>";
          }
     }
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
     echo "<br> for " . $result * $total_qus . " total ratings <br>";
     return ($result * $total_qus);
}
?>
<!doctype html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" sizes="16x16" rel="icon" href="../../../imgs/1611814068005.jpg" />
    <title>Summary</title>
</head>

<body>

</body>

</html>