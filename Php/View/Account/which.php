<?php
ob_start();
include('../connect.php');

session_start();

// php get user name using session variable or else redirect 
if (!isset($_SESSION['name'])) {
    header("Location:login.php");
}

// session_destroy();
// bug fix remember
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css CDN (solve after npm install [note]) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../dist/output.css" />
    <link rel="stylesheet" href="../../../Css/style.css" />
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
    <!-- chart js API -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- basic css -->
    <style>
        .myfont {
            font-family: "Bungee", cursive;
        }

        th,
        td {
            padding: 1rem;
            font-family: monospace;
            font-weight: bold;
        }

        /* inline nav */
        .overfolo::-webkit-scrollbar {
            width: 6px;
        }

        /* Track */

        .overfolo::-webkit-scrollbar-track {
            box-shadow: inset 0 0 2px grey;
        }

        /* Handle */

        .overfolo::-webkit-scrollbar-thumb {
            background: #006eff;
            border-radius: 0.5rem;
        }

        /* Handle on hover */

        .overfolo::-webkit-scrollbar-thumb:hover {
            background: #006effb7;
        }

        .li {
            overflow-y: auto;
            height: 15rem;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 0.5rem;
        }

        .chart_con {
            padding: 1rem;
            max-width: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .i1 {
            display: inline-block;
            width: 50%;
            height: 50%
        }

        @media screen and (max-width: 768px) {
            .i1 {
                height: 100%;
                width: 100%;
            }
        }
    </style>
</head>

<body class="p-0 m-0">
    <ul class="sidenav">
        <!-- to destroy session -->
        <li style="padding-bottom:0px"><a class="font-mono" href="logout.php" target="_self">Logout</a></li>
    </ul>
    <br />
    <div class="bg-[#ffffff] text-center content" style="padding:0.5rem">
        <!-- This requires Tailwind CSS v2.0+ -->
        <div class=" bg-[#ffffff] text-center p-3 m-2">
            <div class="chart_con">
                <p class="myfont" style="text-align:left;font-size:1.5rem;padding:1rem;text-decoration:underline">Select
                    Form
                </p>
                <br>
                <form action="" method="POST">
                    <div class="forms">
                        <a href="./pats.php" class="but w-max inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300" name="PAPForm" style="width:100%"> PAT'S Form
                        </a>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="forms">
                        <a href="./sss.php" class="but w-max inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300" name="StuForm" style="width:100%"> Student Survey Form
                        </a>
                    </div>
                    <br />
                    <br />
                    <br />
                    <div class="forms">
                        <a href="./fac.php" class="but w-max inline-block font-mono text-center border border-transparent rounded-md py-3 px-8 text-lg text-white transition ease-in-out delay-100 bg-blue-500 hover:bg-[#1fc6e4] hover:text-black duration-300" name="FFForm" style="width:100%"> Faculty Feedback Form
                        </a>
                    </div>
                    <br />
                    <br />
                </form>
                <br>
                <!-- more list not possible reason procastination -->
            </div>
            <br />
            <br />
            <div class="footer-copyright" style="position:relative;">
                <br />
                <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_blank" class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a href="../../../personal.html" class="text-[blue] hover:underline " target="_blank">Contributors</a>
                    <br />
            </div>
            <script type="text/javascript" src="../../../Js/admin.js?v=1"></script>
        </div>
</body>
<script src="../../../Js/main.js?v=1" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script async type="text/javascript" src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>


</html>