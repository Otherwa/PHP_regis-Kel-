<?php

session_start();
// php get user name using session variable
if (!isset($_SESSION['name'])) {
    header('Location: adminlogin.php');
}


// re write functions
function admin_chart(){
    $con = get_connection();
    $sql_insert_form_num = "SELECT Count(*) as total FROM `form_fillup`";
    $result = mysqli_query($con, $sql_insert_form_num);
    $data=mysqli_fetch_assoc($result);
    return $data['total'];
}

function get_connection(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "regis_dat";
    $con = mysqli_connect($host, $user, $password, $dbname);
    return $con;
}

$chartdata = admin_chart();
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind css CDN (solve after npm install [note]) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../dist/output.css" />
    <link rel="stylesheet" href="../../Css/style.css" />
    <!-- Gfonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link type="image/png" sizes="16x16" rel="icon" href="..\..\imgs\1611814068005.jpg" />
    <!-- chart js API -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- basic css -->
    <style>
    .myfont {
        font-family: "Bungee", cursive;
    }
    </style>
</head>

<body class="p-1 m-0">
    <!-- php js bridge -->
    <input id="chardata" type="hidden" value="<?php echo $chartdata ?> ">
    <br />
    <br />
    <br />
    <!-- This requires Tailwind CSS v2.0+ -->
    <div class=" bg-[#ffffff] text-center p-3 m-2">
        <p class="text-4xl myfont antialiased tracking-normal md:text-4xl overline leading-loose">Hey Shaw'ty.</p>
        <br />
        <br />
        <!-- chart js -->
        <canvas id="myChart" width="400" height="150"></canvas>
        <br />
        <br />
        <br />
        <!-- form post method -->
        <form method="POST" action="xlxs_gen.php">
            <input type="submit" name="export"
                class="font-mono text-center bg-[#006eff] p-3 m-1 hover:bg-slate-500 rounded transition-all duration-500"
                value=".xlxs sheet" />
        </form>

        <div class=" footer-copyright">
            <br />
            <p>&copy; | Copyright 2022 - ♾️ All rights reserved. | <a href="../../term.html" target="_self"
                    class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                    href="../../personal.html" class="text-[blue] hover:underline ">Contact.</a>
                <br />
        </div>
    </div>
    <script type="text/javascript" src="../../js/admin.js"></script>
</body>


</html>