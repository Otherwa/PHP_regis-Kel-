<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "regis_dat";
$con = mysqli_connect($host, $user, $password, $dbname);
if (!$con) {
    die("Could not connect to" . mysqli_connect_error());
}
//echo "Connection established";
//VALUES
$flag = 0;

//on click
if (isset($_POST['login'])) {
    //session statuses
    $status = session_status();
    if ($status == PHP_SESSION_NONE) {
        //There is no active session
        session_start();
    } elseif ($status == PHP_SESSION_DISABLED) {
        //Sessions are not available
    } elseif ($status == PHP_SESSION_ACTIVE) {
        //Destroy current and start new one
        session_destroy();
        session_start();
    }

    //Get dat
    $name = $_POST['Name'];
    $review = $_POST['Review'];
    $phone = $_POST['Phone'];

    //val var
    $phone_val = 10;
    
    //session_name to send
    $_SESSION['name'] = $name;

    //check if exists
    $sql_check = "SELECT Id from `form_fillup` WHERE Name = '$name'; ";
    $result = mysqli_query($con, $sql_check);
    $count = mysqli_num_rows($result);

    if ($count > 1) { 
        //ony two per query user
        echo "<script>alert('You\'ve Already Submitted Two Forms');</script>";
    } 
    elseif ($name != null && $review != null && $phone_val >= strlen($phone)) {
        
        $sql_insert_form_fillup = "INSERT INTO `form_fillup` (`Name`, `Review`, `Date`) VALUES ('$name','$review',current_timestamp());";
        $result = mysqli_query($con, $sql_insert_form_fillup);

        //retrive id
        $sql_retrieve = "SELECT Id from `form_fillup` WHERE Name = '$name' ";
        $result = mysqli_query($con, $sql_retrieve);
        // query to get primary key of id
        $user_id = mysqli_fetch_assoc($result);
        $u_id = $user_id['Id'];

        //get data u_id to store and pass on to sql2 Query;
        $sql_insert_form_num = "INSERT INTO `form_num` (`Phone`, `User_Id`) VALUES ('$phone','$u_id');";
        $result = mysqli_query($con, $sql_insert_form_num);

        $flag = 1;
        //if all done set flag
    } else {
        session_destroy();
        echo "<script>confirm('Invalid Form Try Again');</script>";
    }

    //redirect(base_url) falg operations
    if ($flag == 1) {
        sleep(1);
        header("Location: /PHP_regis/Php/View/formsub.php");
        // formsub only redirection
    }
    //  session_unset();
} 
?>


<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind css -->
    <!-- <script src="https://cdn.tailwindcss.com"></script>  -->
    <link rel="stylesheet" type="text/css" href="../../dist/output.css" />
    <link rel="stylesheet" type="text/css" href="../../Css/style.css" />
    <!-- Gfonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link type="image/png" sizes="16x16" rel="icon" href="..\..\imgs\1611814068005.jpg" />
    <!-- num style -->
    <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type="number"] {
        -moz-appearance: textfield;
    }
    </style>
</head>

<body class="p-1 m-0">
    <br />
    <br />

    <div class="l-form p-0 ">
        <form action="#" method="POST" class="form">
            <fieldset>
                <legend>Yare Yare Daze</legend>

                <h1 class="form__title" style="font-family: 'Bungee', cursive; font-size: 2.2rem; color: #565656;">
                    <span style="text-decoration:underline;">Fill up</span><br />
                    <span style=" font-size: 1.4rem; font-family: 'Roboto' , sans-serif; color: black;">User
                        ⏳</span>
                </h1>

                <div class="form__div">
                    <input type="text" class="form__input" name="Name" id="name" placeholder="e.g xyz"
                        autocomplete="off" />
                    <label for="" class="form__label">Name</label>
                </div>

                <div class="form__div">
                    <input type="text" class="form__input" name="Review" id="review" placeholder="e.g xyz@1"
                        autocomplete="off" />
                    <label for="" class="form__label">Review?</label>
                </div>

                <div class="form__div">
                    <input type="number" class="form__input" name="Phone" id="phone" placeholder="e.g 8828388979"
                        autocomplete="off" />
                    <label for="" class="form__label" id="phone_err_label">Phone</label>
                </div>
                <code id="phone_err">- phone number invalid</code>

                <br />
                <input type="submit" id="sub" class="form__button font-mono" value="Submit" name="login"
                    style="float: right;" />
            </fieldset>
        </form>
        <br />
        <br />
        <br />
    </div>
</body>

<!-- form validation -->
<script type="text/javascript" src="../../Js/form.js"></script>

</html>