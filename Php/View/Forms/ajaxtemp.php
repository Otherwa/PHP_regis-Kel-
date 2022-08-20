<?php
ob_start();
// do no touch 

include('../connect.php');

// get teacher from class
if (isset($_POST['class'])) {
    $con = get_con();
    $query = " SELECT DISTINCT `tname` FROM `teachers` WHERE cname = " . "\"" . $_POST['class'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "--" . ">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['tname'] . "\">" . $row['tname'] . "</option>";
    }
}

// check first  if form submit is valid for submission and go
if (isset($_POST['cid']) && isset($_POST['class1']) && isset($_POST['teach']) && isset($_POST['sem']) && isset($_POST['sub'])) {
    $con = get_con();
    // id subject issue is present
    $query = "SELECT * FROM `answerpats` WHERE ctrlid =\"" . $_POST['cid'] . "\"" . " AND cname =\"" . $_POST['class1'] . "\"" . " AND tname =\"" . $_POST['teach'] . "\"" . " AND sem =\"" . $_POST['sem'] . "\"" . " AND subject =\"" . $_POST['sub'] . "\"";
    $result = mysqli_query($con, $query);
    $result = mysqli_num_rows($result);
    // if form filled no display ajax fail 
    if ($result > 0) {
        // fix ture start condition in first case of on change by inspect
        // 50ms send
        echo "<input id =\"msg\" value = \"none\" style=\"display:none;\">";
        echo "<p style=\"color:red;\">You've already Filled this Form</p>";
        echo " <img src=\"https://i.giphy.com/media/BWxK3egmnMCkVoe5Tj/giphy.webp\" alt=\"octo\"
        style=\"height: 3rem; margin-top: 1rem;\" />";
        echo "<script>$('#sub').attr('disabled',true);</script>";
    } else {
        echo "<input id=\"msg\" value=\"block\" style=\"display:none;\">";
        echo "<p style=\"color:green;\">Form Open</p>";
        echo "<script>$('#sub').attr('disabled', false);</script>";
        // if inspect chnage but final flow works
    }
}

// semester if tname concides one in a blue moon
if (isset($_POST['tname']) && isset($_POST['classv1'])) {
    $con = get_con();
    $query = " SELECT * FROM `teachers` WHERE tname = " . "\"" . $_POST['tname'] . "\"" .  "AND cname =" . "\"" . $_POST['classv1'] . "\"; ";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "--" . ">" . "--" . "</option>";
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
        echo "<option value =\"" . "--" . "\">" . "--" . "</option>";
        echo "<option value =\"" . $row['subject1'] . "\">" .  $row['subject1']  . "</option>";
        echo "<option value =\"" . $row['subject2'] . "\">" .  $row['subject2']  . "</option>";
        echo "<option value =\"" . $row['subject3'] . "\">" .  $row['subject3']  . "</option>";
    } else {
        echo "<option value =\"" . "--" . "\">" . "--" . "</option>";
    }
}


// verify student
if (isset($_POST['rollno'])) {
    $con = get_con();
    $query = "SELECT `name`,`cname` FROM `activectrlid` WHERE ctrlid= " . "\"" . $_POST['rollno'] . "\";";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $result = mysqli_num_rows($result);
    if ($result > 0) {
        echo "<span style='color:green;font-family:monospace;font-weight:bold;'>Valid Id ✅</span>";
        echo "<input id =\"set_name\" value = \"" . $row['name'] . "\" style=\"display:none;\">";
        echo "<input id =\"set_class\" value = \"" . $row['cname'] . "\" style=\"display:none;\">";
    } else {
        echo "<span id=\"msg_\"style='color:red;font-family:monospace;font-weight:bold;'>Invalid Id ❌</span>";
    }
}


// student extra verification

// studentsss form check ajax req
if (isset($_POST['cid_stu'])) {
    $con = get_con();
    $query = "SELECT * FROM `answersss` WHERE rollno =\"" . $_POST['cid_stu'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_num_rows($result);
    // if form filled dont display
    if ($result > 0) {
        echo "<script>$('#sub').attr('disabled', true);</script>";
        echo "<input id =\"msg\" value = \"none\" style=\"display:none;\">";
        echo "<p style=\"color:red;\">You've already Filled this Form</p>";
        echo " <img src=\"https://i.giphy.com/media/BWxK3egmnMCkVoe5Tj/giphy.webp\" alt=\"octo\"
        style=\"height: 3rem; margin-top: 1rem;\" />";
        echo "<script>$('#sub').attr('disabled',true);</script>";
    } else {
        echo "<input id=\"msg\" value=\"block\" style=\"display:none;\">";
        echo "<p style=\"color:green;\">Form Open</p>";
        echo "<script>$('#sub').attr('disabled', false);</script>";
    }
}

// studentsss programme

if (isset($_POST['cid_crt'])) {
    $con = get_con();
    $query = "SELECT `programme` FROM `activectrlid` WHERE ctrlid =\"" . $_POST['cid_crt'] . "\";";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $result1 = mysqli_num_rows($result);
    if ($result1 > 0) {
        echo "<option value =\"" . "--" . "\">" . "--" . "</option>";
        echo "<option value =\"" . $row['programme'] . "\">" .  $row['programme']  . "</option>";
    } else {
        echo "<input id=\"msg\" value=\"block\" style=\"display:none;\">";
        echo "<option value =\"" . "--" . "\">" . "--" . "</option>";
    }
}

// close connection
mysqli_close($con);
ob_end_flush();
?>
<!doctype html>
