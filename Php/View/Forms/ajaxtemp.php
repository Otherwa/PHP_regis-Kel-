<?php



include('../connect.php');

// semester
if (isset($_POST['tname'])) {
    $con = get_con();
    $query = " SELECT * FROM `teachers` WHERE tname = " . "\"" . $_POST['tname'] . "\";";
    $result = mysqli_query($con, $query);
    echo "<option value = " . "none" . ">" . "--" . "</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['sem'] . "\">" . $row['sem'] . "</option>";
    }
}

// get subject for specific semester teacher
if (isset($_POST['sem']) && isset($_POST['teachername'])) {
    $con = get_con();
    $query = " SELECT * FROM `teachers` WHERE sem = " . "\"" . $_POST['sem'] . "\" " . "AND tname =" . "\"" . $_POST['teachername']  . "\"; ";
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

?>
<!doctype html>