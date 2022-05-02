<?php
include('../connect.php');
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
}
// INSERT INTO `form_fillup` (`Id`, `Name`, `Review`, `Day`) VALUES ('1', 'Atharv', 'NICE', DAYNAME(CURDATE()));
?>


<!DOCTYPE html>
<html>

<head>
    <title>Form Submission</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind css -->
    <!-- <script src="https://cdn.tailwindcss.com"></script>  -->
    <link rel="stylesheet" type="text/css" href="../../../dist/output.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/form.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/nav.css" />
    <!-- title color -->
    <meta name="theme-color" content="#006eff;" />
    <!-- Gfonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link type="image/png" sizes="16x16" rel="icon" href="../../../imgs/1611814068005.jpg" />
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
                <code style="color:red">Still in Production</code>
                <legend>Yare Yare Daze</legend>

                <h1 class=" form__title"
                    style="font-family: 'Bungee', cursive; font-size: 2.2rem; color: rgb(119, 195, 196);">
                    <span style="text-decoration:underline;">Fill up</span><br />
                    <span style=" font-size: 1.4rem; font-family: 'Roboto' , sans-serif; color: black;">User
                        <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                            style="height:3rem"></span>
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
<script type="text/javascript" src="../../../Js/form.js"></script>

</html>