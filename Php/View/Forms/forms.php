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
// INSERT INTO `form_fillup` (`Id`, `Name`, `Review`, `Day`) VALUES ('1', 'Atharv', 'NICE', DAYNAME(CURDATE()));

?>



<!DOCTYPE html>
<html>

<head>
    <title>Forms Submission</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        width: 25rem;
        height: 10rem;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, );
        transition: 300ms;
        box-shadow: 0.5rem 0.5rem rgba(0, 0, 0);
    }

    .but:hover {
        transition: 300ms;
        box-shadow: 2.5px 2.5px rgba(0, 0, 0);
    }

    @media screen and (max-width: 460px) {
        .but {
            width: 15rem;
            height: 7rem;
        }
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
        <p class="text-center" style="display:inline-block"><code id="demo"
                style="padding:0.5rem;font-size:1.3rem;font-family:monospace;font-weight:bold"> <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo" style="min-height:2rem;width:auto;max-height:6rem;"></code>
        </p>
        <br />
        <br />
        <div class="text-center" id="forms" style="display:none; padding:1rem;margin:1rem">
            <form action="" method="POST">
                <button type="submit"
                    class="but inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300"
                    name="PAPForm"> PAP's Form
                </button>
                <br />
                <br />
                <br />
                <button type="submit"
                    class="but inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300"
                    name="StuForm"> Student Survey Form
                </button>
                <br />
                <br />
                <br />
                <button type="submit"
                    class="but inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300"
                    name="FFForm"> Faculty Feedback Form
                </button>
                <br />
                <br />
                <br />
            </form>
        </div>
        <div id="msg" class="msg text-xl text-center" style="display:none">
            <p id="msg-p" style="padding:1rem">Forms are not allowed to fill furthermore.
            </p>
            <br />
            <img src="" alt="Scott" id="clown_com"
                style="text-align:center;box-shadow:4px 5px 2.5rem #cacaca;display:inline-block;border-radius:0.4rem;width:55rem;height:auto" />
        </div>
        <div class="footer-copyright text-center" style="padding:1rem">
            <br />
            <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_self"
                    class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                    href="../../../personal.html" class="text-[blue] hover:underline ">Contact</a>
            </p>
        </div>
    </div>
</body>
<!-- form validation -->
<script type="text/javascript" src="../../../Js/forms.js"></script>
<script src="../../../Js/main.js" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>

</html>