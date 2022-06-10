<?php
include('../connect.php');
//on click
session_start();
//session statuses
$status = session_status(); //1st measure
if ($status == PHP_SESSION_ACTIVE) {
    //There is no active session
    session_destroy();
}
if (isset($_POST['PAPForm'])) {
    session_start();
    $_SESSION['setPAP'] = "yes";
    header('Location: pap.php');
}
if (isset($_POST['StuForm'])) {
    session_start();
    $_SESSION['setStu'] = "yes";
    header('Location: student.php');
}
if (isset($_POST['FFForm'])) {
    session_start();
    $_SESSION['setFF'] = "yes";
    header('Location: faculty.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forms Submission</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css -->
    <!-- <script src="https://cdn.tailwindcss.com"></script>  -->
    <link rel="stylesheet" type="text/css" href="../../../dist/output.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/style.css" />
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
    <style type="text/css">
    .but {
        text-align: center;
        width: 29rem;
        height: 14rem;
        box-shadow: 5px 5px 5px rgb(0, 0, 0);
        transition: 300ms;
        border: solid 0.1rem black;
        box-shadow: 0rem 0rem rgba(0, 0, 0);
    }

    .but:hover {
        transition: 300ms;
        box-shadow: 0.5rem 0.5rem rgba(0, 0, 0);
        position: relative;
        transform: translate(-0.5rem, -0.5rem);
        box-shadow: 0.5rem 0.5rem #000;
    }

    /* res card form */

    .forms {
        padding: 0.7rem;
        display: inline-grid;
        justify-items: center;
        align-items: center;
        justify-content: center;
        grid-gap: 1rem;
        align-content: space-between;
    }

    @media screen and (max-width: 460px) {
        .but {
            width: 18rem;
            height: 9rem;
        }
    }

    .octo {
        max-height: 6rem;
        display: inline-block;
        width: auto;

    }
    </style>
</head>

<body class="p-0 m-0">
    <ul class="sidenav">
        <li><a class="font-mono" href="../../../index.html" target="_self">Form</a></li>
        <li><a class="font-mono" href="../../../about.html" target="_self">About</a></li>
    </ul>
    <br />
    <div class="bg-[#ffffff] text-center m-2 content">
        <br />
        <br />
        <p class="text-center" style="display:inline-block"><code id="demo" style="padding:0.5rem"
                class="hover:underline"> <img class="octo" src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"></code>
        </p>
        <br />
        <br />
        <div class="text-center" id="forms" style="display:none; padding:1rem;margin:1rem">
            <form action="" method="POST">
                <div class="forms">
                    <button type=" submit"
                        class="but inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300"
                        name="PAPForm"> PAP's Form
                    </button>
                </div>
                <br />
                <br />
                <br />
                <div class="forms">
                    <button type="submit"
                        class="but inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300"
                        name="StuForm"> Student Survey Form
                    </button>
                </div>
                <br />
                <br />
                <br />
                <div class="forms">
                    <button type="submit"
                        class="but inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300"
                        name="FFForm"> Faculty Feedback Form
                    </button>
                </div>
                <br />
                <br />
            </form>
            <br>
            <code
                style="padding:0.4rem;color:gray;font-size:0.7rem;font-weight:bold;text-align: center;display: flex;flex-direction: row;justify-content: center;">
                (Please fill the attached form to receive the required information.<br> For
                further informations, advice or assistance contact the administrator.)
            </code>
        </div>
        <div id="msg" class="msg text-xl text-center" style="display:none">
            <br />
            <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                style="max-height:6rem;display:inline-block;">
            <br />
            <br />
            <p id="msg-p" style="padding:1rem">
                Forms are not allowed to fill furthermore.
            </p>
            <br />
            <br />
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Solid_white.svg/768px-Solid_white.svg.png"
                alt="Scott" id="clown_com"
                style="text-align:center;box-shadow:4px 5px 2.5rem #cacaca;display:inline-block;border-radius:0.4rem;width:55rem;height:auto" />
        </div>
    </div>

    <div class="footer-copyright text-center" id="hidcopy" style=" display:none;padding:1rem">
        <img id="foot" alt="pc" src="https://64.media.tumblr.com/tumblr_mac17l4bpY1rfjowdo1_500.gifv"
            style="max-width:10rem;height:auto;display:none;position:relative;">
        <br />
        <br />
        <br />
        <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_self"
                class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                href="../../../personal.html" class="text-[blue] hover:underline ">Contributors</a>
        </p>
    </div>

</body>
<!-- form validation -->
<script type="text/javascript" src="../../../Js/forms.js"></script>
<script src="../../../Js/main.js" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>

</html>