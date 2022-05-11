<?php

session_start();
// php get user name using session variable or else redirect 
if (!isset($_SESSION['name'])) {
    header('Location: adminlogin.php');
}
include('../connect.php');
$con = get_con();
// re write functions
function admin_chart($con)
{

    // bar data
    $sql_form_retrive = "SELECT count(*) as total FROM `answerpats`;";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data = $data['total'];
    return $data;
}


//varaibe to store chart data
$chartdata = admin_chart($con);

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
    <link rel="stylesheet" href="../../../dist/output.css" />
    <link rel="stylesheet" href="../../../Css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/form.css" />
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
            <br />
            <p>Does not work in mobile browsers.</p>
        </form>

        <div class=" footer-copyright">
            <br />
            <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_blank"
                    class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                    href="../../../personal.html" class="text-[blue] hover:underline " target="_blank">Contact</a>
                <br />
        </div>
    </div>
    <!-- php js bridge -->
    <input id="data" type="hidden" value="<?php echo $chartdata ?>">
    <script type="text/javascript" src="../../../Js/admin.js"></script>

</body>


</html>