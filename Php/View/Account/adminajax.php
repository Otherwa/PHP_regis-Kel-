<?php
include('../connect.php');

if (isset($_POST['teach'])) {
    $con = get_con();
    $query = " SELECT DISTINCT `cname` FROM `teachers` WHERE tname = " . "\"" . $_POST['teach'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "--" . ">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['cname'] . "\">" . $row['cname'] . "</option>";
    }
}

if (isset($_POST['teac1'])) {
    $con = get_con();
    $query = "SELECT * FROM `teachers` WHERE tname =\"" . $_POST['teac1'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value =\"" . "--" . "\">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['sem'] . "\">" . $row['sem'] . "</option>";
    }
}

if (isset($_POST['sem']) && isset($_POST['teachername'])) {
    $con = get_con();
    $query = " SELECT * FROM `teachers` WHERE sem = " . "\"" . $_POST['sem'] . "\" " . "AND tname =" . "\"" . $_POST['teachername'] . "\"; ";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $result1 = mysqli_num_rows($result);
    if ($result1 > 0) {
        echo "<option value =\"" . "--" . "\">" . "--" . "</option>";
        echo "<option value =\"" . $row['subject1'] . "\">" .  $row['subject1']  . "</option>";
        echo "<option value =\"" . $row['subject2'] . "\">" .  $row['subject2']  . "</option>";
        echo "<option value =\"" . $row['subject3'] . "\">" .  $row['subject3']  . "</option>";
    } else {
        echo "<option value =\"" . "--" . "\">" . "--" . "</option>";
    }
}

// chart


if (isset($_POST['teacher']) && $_POST['class1'] && $_POST['sem'] && $_POST['sub']) {

    $review = array();
    $con = get_con();

    // store data in 2x2
    for ($a = 11; $a < 29; $a++) {
        $temp_array = array();
        for ($rate = 1; $rate < 7; $rate++) {
            $query = "SELECT COUNT(a" . $a  . ") as count1 from answerpats WHERE tname =\"" . $_POST["teacher"] . "\" AND cname=\"" . $_POST["class1"] . "\" AND sem=\"" . $_POST["sem"] .  "\" AND subject=\"" . $_POST["sub"] . "\""  . " AND a" . $a . "=\"" . $rate . "\";";
            $result = mysqli_query($con, $query);
            $result = mysqli_fetch_assoc($result);
            array_push($temp_array, $result['count1']);
        }
        array_push($review, $temp_array);
    }

    $total = Get_count();
    $total_count = filter($review);

    $data = "";
    for ($b = 0; $b < 6; $b++) {
        $data = ($total_count[$b] * 100 / $total);
        echo "<input id=\"" . $b . "\" type=\"hidden\" value =\"" . $data . "\">";
    }
}



// same in xlxs_gen
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

    $query = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_POST['teacher'] . "\"AND subject =\"" . $_POST['sub'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);

    $result = $result['count1'];
    echo "total count : " . $result * $total_qus . "<br>";
    return ($result * $total_qus);
}



?>
<!doctype html>