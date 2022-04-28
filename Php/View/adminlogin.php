<?php

// default value
$pass_confo = "";

if (isset($_POST['login'])) {
    $name =  $_POST['username'];
    $pass = $_POST['password'];
  
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

    //session variables
    
    $_SESSION['name'] = $name;

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "regis_dat";
    $con = mysqli_connect($host, $user, $password, $dbname);
    $sql = "SELECT * FROM `admin` WHERE Name = '$name' AND Password = '$pass'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);
    if($row > 0){
     header("Location: admin.php");
    }
    else{
        echo "<script>alert('Wrong Password or Username');</script>";
    }
    
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
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
    <br />
    <br />
    <br />

    <div class="l-form p-0 ">

        <form action="#" method="POST" class="form" style="width:33rem">
            <fieldset>
                <legend></legend>

                <h1 class="form__title" style="font-family: 'Bungee', cursive; font-size: 2.2rem; color: #565656;">
                    <span style="text-decoration:underline;">Login in</span><br />
                    <span
                        style=" font-size: 1.4rem; font-family: 'Roboto' , sans-serif; color: black;">SuperUser.</span>
                </h1>

                <div class="form__div">
                    <input type="text" class="form__input" name="username" id="name" placeholder="e.g xyz"
                        autocomplete="off" />
                    <label for="" class="form__label">Name</label>
                </div>

                <div class="form__div">
                    <input type="password" class="form__input" name="password" id="review" placeholder="e.g xyz@1"
                        autocomplete="off" />
                    <label for="" class="form__label">Password</label>
                </div>

                <br />
                <input type="submit" id="sub" class="form__button font-mono" value="Login" name="login"
                    style="float: right;" />

            </fieldset>
        </form>
        <br />
        <br />
        <br />
    </div>
</body>




</html>