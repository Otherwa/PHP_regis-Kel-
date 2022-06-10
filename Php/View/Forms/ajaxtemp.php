<?php

// do no touch 

include('../connect.php');

// get teacher from class
if (isset($_POST['class'])) {
    $con = get_con();
    $query = " SELECT DISTINCT `tname` FROM `teachers` WHERE cname = " . "\"" . $_POST['class'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "none" . ">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['tname'] . "\">" . $row['tname'] . "</option>";
    }
}

// semester if tname concides one in a blue moon
if (isset($_POST['tname']) && isset($_POST['classv1'])) {
    $con = get_con();
    $query = " SELECT * FROM `teachers` WHERE tname = " . "\"" . $_POST['tname'] . "\"" .  "AND cname =" . "\"" . $_POST['classv1'] . "\"; ";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "none" . ">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['sem'] . "\">" . $row['sem'] . "</option>";
    }
}

// get subject for specific semester teacher
if (isset($_POST['sem']) && isset($_POST['teachername'])) {
    $con = get_con();
    $query = " SELECT * FROM `teachers` WHERE sem = " . "\"" . $_POST['sem'] . "\" " . "AND tname =" . "\"" . $_POST['teachername'] . "\"; ";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $result1 = mysqli_num_rows($result);
    if ($result1 > 0) {
        echo "<option value =\"" . " " . "\">" . "--" . "</option>";
        echo "<option value =\"" . $row['subject1'] . "\">" .  $row['subject1']  . "</option>";
        echo "<option value =\"" . $row['subject2'] . "\">" .  $row['subject2']  . "</option>";
        echo "<option value =\"" . $row['subject3'] . "\">" .  $row['subject3']  . "</option>";
    } else {
        echo "<option value =\"" . " " . "\">" . "--" . "</option>";
    }
}


// verify student
if (isset($_POST['rollno'])) {
    $con = get_con();
    $query = " SELECT * FROM `activectrlid` WHERE ctrlid= " . "\"" . $_POST['rollno'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_num_rows($result);
    if ($result > 0) {
        echo "<span style='color:green;font-family:monospace;font-weight:bold;'>Valid Id ✅</span>";
        echo "<input id =\"msg\" value = \"block\" style=\"display:none;\">";
        echo "<script>$('#sub').attr('disabled',false);</script>";
        // js hidden value to ol display:none
    } else {
        echo "<span id=\"msg_\"style='color:red;font-family:monospace;font-weight:bold;'>Invalid Id ❌</span>";
        echo "<input id =\"msg\" value = \"none\" style=\"display:none;\">";
        echo "<script>$('#sub').attr('disabled',true);</script>";
    }
}
?>
<!doctype html>