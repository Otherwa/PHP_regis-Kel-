<?php
// connection
include('../connect.php');

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

    $con = get_con();
    $sql = "SELECT * FROM `admin` WHERE name = '$name' AND pass = '$pass'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        header("Location: admin.php");
    } else {
        echo "<script>alert('Wrong Password or Username');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css -->
    <link rel="stylesheet" type="text/css" href="../../../dist/output.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/form.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/nav.css" />
    <!-- title color -->
    <meta name="theme-color" content="#ff6600">
    <!-- Gfonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link type="image/png" sizes="16x16" rel="icon" href="../../../imgs/1611814068005.jpg" />
    <!-- num style -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
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

    ul li {
        padding-bottom: 0rem;

    }

    ul {
        padding-left: 0rem;
    }
    </style>
</head>

<body class="p-0 m-0">
    <ul class="sidenav">
        <li><a class="font-mono" href="../../../index.html" target="_self">Init</a></li>
    </ul>
    <br />
    <br />
    <div class="bg-[#ffffff] text-center" style="padding:0.5rem">
        <br>
        <br>
        <div class="l-form p-0 ">
            <br>
            <form action="#" method="POST" class="form" style="width:33rem">
                <fieldset>
                    <legend></legend>

                    <h1 class="form__title"
                        style="font-family: 'Bungee', cursive; font-size: 2.2rem; color: rgb(119, 195, 196);">
                        <span style="text-decoration:underline;">Login in</span><br />
                        <span style=" font-size: 1.4rem; font-family: 'Roboto' , sans-serif; color: black;">SuperUser
                            <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                                style="height:3rem">
                        </span>
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

        </div>
        <div class="footer-copyright text-center" style="padding:1rem">
            <br />
            <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_self"
                    class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                    href="../../../personal.html" class="text-[blue] hover:underline ">Contributors</a>
            </p>
        </div>
    </div>
</body>
<script src="../../../Js/main.js?v=1" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>

</html>