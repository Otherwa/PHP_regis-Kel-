<?php
ob_start();
include('../connect.php');
$con = get_con();
if (isset($_POST['programme'])) {
    $con = get_con();
    $query = " SELECT DISTINCT `tname` FROM `answerpats` WHERE programme = " . "\"" . $_POST['programme'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "--" . ">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['tname'] . "\">" . $row['tname'] . "</option>";
    }
}

if (isset($_POST['teach'])) {
    $con = get_con();
    $query = " SELECT DISTINCT `cname` FROM `answerpats` WHERE tname = " . "\"" . $_POST['teach'] . "\" AND programme = " . "\"" . $_POST['prg'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "--" . ">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['cname'] . "\">" . $row['cname'] . "</option>";
    }
}

if (isset($_POST['teac1']) && isset($_POST['class'])) {
    $con = get_con();
    $query = "SELECT DISTINCT `sem` FROM `answerpats` WHERE tname =\"" . $_POST['teac1'] . "\"AND cname =\"" . $_POST['class'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value =\"" . "--" . "\">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['sem'] . "\">" . $row['sem'] . "</option>";
    }
}

if (isset($_POST['sem']) && isset($_POST['teachername'])) {
    $con = get_con();
    $query = " SELECT DISTINCT `subject` FROM `answerpats` WHERE sem = " . "\"" . $_POST['sem'] . "\" " . "AND tname =" . "\"" . $_POST['teachername'] . "\"; ";
    $result = mysqli_query($con, $query);
    echo "<option value =\"" . "--" . "\" selected>" . "--" . "</option>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value=\"" . $row['subject'] . "\">" . $row['subject'] . "</option>";
    }
}

// chart

// GET_CHART() function call
if (isset($_POST['teacher']) && $_POST['class1'] && $_POST['sem'] && $_POST['sub']) {

    $review = array();
    $con = get_con();

    // store data in 2x2
    for ($a = 11; $a < 29; $a++) {
        $temp_array = array();
        for ($rate = 1; $rate < 8; $rate++) {
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
    for ($b = 0; $b < 7; $b++) {
        $data = ($total_count[$b] * 100 / $total);
        echo "<input id=\"" . $b . "\" type=\"hidden\" value =\"" . $data . "\">";
    }

    // send session
    session_start();
    $_SESSION['count'] = $total;
}


// same in xlxs_gen
function filter($review)
{
    $total_count = array();
    for ($b = 0; $b < 7; $b++) {
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
    $cout = 18;
    $query = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_POST['teacher'] . "\"AND subject =\"" . $_POST['sub'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);

    $result = ($result['count1'] * 18);
    echo "<p> Total Records : " . ($result / 18) . "</p><br>" . "<p>" . $_POST['teacher'] . "</p><br>" . "<p>" . $_POST['sub'] . "</p>";
    return ($result);
}


if (isset($_POST['prog'])) {
    $con = get_con();
    $query = " SELECT DISTINCT `class` FROM `answersss` WHERE programme = " . "\"" . $_POST['prog'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "--" . ">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['class'] . "\">" . $row['class'] . "</option>";
    }

    $_SESSION['count'] = $total1;
}



// new requiremrnets
// pats_get chart Ajax
// GET_CHART() function call
if (isset($_POST['teacher_pats'])) {

    $review = array();
    $con = get_con();

    // store data in 2x2
    for ($a = 11; $a < 29; $a++) {
        $temp_array = array();
        for ($rate = 1; $rate < 8; $rate++) {
            $query = "SELECT COUNT(a" . $a  . ") as count1 from answerpats WHERE tname =\"" . $_POST["teacher_pats"] . "\"" . " AND a" . $a . "=\"" . $rate . "\";";
            $result = mysqli_query($con, $query);
            $result = mysqli_fetch_assoc($result);
            array_push($temp_array, $result['count1']);
        }
        array_push($review, $temp_array);
    }

    $total = Get_count_pats();
    $total_count = filter_pats($review);

    $data = "";
    for ($b = 0; $b < 7; $b++) {
        $data = ($total_count[$b] * 100 / $total);
        echo "<input id=\"" . $b . "\" type=\"hidden\" value =\"" . $data . "\">";
    }
    // send session
    session_start();
    $_SESSION['count'] = $total;
}

// total number
function Get_count_pats()
{
    $con = get_con();

    // first year regex
    $query1 = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_POST['teacher_pats'] . "\"" . " AND cname LIKE \"FY%\";";
    $result1 = mysqli_query($con, $query1);
    $result1 = mysqli_fetch_array($result1);
    $result1 = ($result1['count1'] * 18);

    echo "<p>" . $_POST['teacher_pats'] . "</p><br>" . "<p> Total Records First Year : " . ($result1 / 18) . "</p><br>";

    // second year regex
    $query2 = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_POST['teacher_pats'] . "\"" . " AND cname LIKE \"SY%\";";
    $result2 = mysqli_query($con, $query2);
    $result2 = mysqli_fetch_array($result2);
    $result2 = ($result2['count1'] * 18);
    echo "<p> Total Records Second Year : " . ($result2 / 18) . "</p><br>";

    // third year regex
    $query3 = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_POST['teacher_pats'] . "\"" . " AND cname LIKE \"TY%\";";
    $result3 = mysqli_query($con, $query3);
    $result3 = mysqli_fetch_array($result3);
    $result3 = ($result3['count1'] * 18);
    echo "<p> Total Records Third Year : " . ($result3 / 18) . "</p><br>";

    // over all 
    $query = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_POST['teacher_pats'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);

    $result = ($result['count1'] * 18);
    echo "<p> Total Records : " . ($result / 18) . "</p><br>";
    return ($result);
}

// same in xlxs_gen
function filter_pats($review)
{
    $total_count = array();
    for ($b = 0; $b < 7; $b++) {
        $temp = 0;
        for ($rate = 0; $rate < 18; $rate++) {
            $temp += (int) $review[$rate][$b];
        }
        array_push($total_count, $temp);
    }
    return $total_count;
}

// sss_departmeents get count data
if (isset($_POST['proginsights'])) {

    // first year regex
    $query1 = "SELECT count(*) as `count1` from answersss WHERE programme=\"" . $_POST['proginsights'] . "\"" . " AND class LIKE \"FY%\";";
    $result1 = mysqli_query($con, $query1);
    $result1 = mysqli_fetch_array($result1);
    $result1 = ($result1['count1'] * 18);

    echo "<p>" . $_POST['proginsights'] . "</p><br>" . "<p> Total Records First Year : " . ($result1 / 18) . "</p><br>";

    // second year regex
    $query2 = "SELECT count(*) as `count1` from answersss WHERE programme=\"" . $_POST['proginsights'] . "\"" . " AND class LIKE \"SY%\";";
    $result2 = mysqli_query($con, $query2);
    $result2 = mysqli_fetch_array($result2);
    $result2 = ($result2['count1'] * 18);
    echo "<p> Total Records Second Year : " . ($result2 / 18) . "</p><br>";

    // third year regex
    $query3 = "SELECT count(*) as `count1` from answersss WHERE programme=\"" . $_POST['proginsights'] . "\"" . " AND class LIKE \"TY%\";";
    $result3 = mysqli_query($con, $query3);
    $result3 = mysqli_fetch_array($result3);
    $result3 = ($result3['count1'] * 18);
    echo "<p> Total Records Third Year : " . ($result3 / 18) . "</p><br>";

    // over all 
    $query = "SELECT count(*) as `count1` from answersss WHERE programme=\"" . $_POST['proginsights'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);

    $result = ($result['count1'] * 18);
    echo "<p> Total Records : " . ($result / 18) . "</p><br>";
}


// close connection
mysqli_close($con);
ob_end_flush();
?>
<!doctype html>