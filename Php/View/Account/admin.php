<?php

session_start();

// php get user name using session variable or else redirect 
if (!isset($_SESSION['name'])) {
    header('Location: adminlogin.php');
}

$name = explode(" ", $_SESSION['name']);
include('../connect.php');
$con = get_con();
// re write functions
function admin_chart_pap($con)
{

    // bar data
    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 00:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data1 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 01:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data2 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 02:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data3 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 03:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data4 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 04:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data5 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 05:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data6 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 06:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data7 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 07:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data8 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 08:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data9 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 09:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data10 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 10:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data11 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 11:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data12 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 12:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data13 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 13:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data14 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 14:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data15 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 15:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data16 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 16:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data17 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 17:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data18 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 18:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data19 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 19:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data20 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 20:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data21 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 21:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data22 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 22:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data23 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 23:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data24 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerpats` WHERE `Time` LIKE '% 24:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data25 = $data['total'];

    return array($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12, $data13, $data14, $data15, $data16, $data17, $data18, $data19, $data20, $data21, $data22, $data23, $data24, $data25);
}

function admin_chart_stu($con)
{

    // bar data
    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 00:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data1 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 01:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data2 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 02:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data3 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 03:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data4 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 04:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data5 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 05:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data6 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 06:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data7 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 07:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data8 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 08:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data9 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 09:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data10 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 10:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data11 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 11:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data12 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 12:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data13 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 13:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data14 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 14:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data15 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 15:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data16 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 16:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data17 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 17:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data18 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 18:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data19 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 19:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data20 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 20:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data21 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 21:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data22 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 22:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data23 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 23:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data24 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answersss` WHERE `Time` LIKE '% 24:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data25 = $data['total'];

    return array($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12, $data13, $data14, $data15, $data16, $data17, $data18, $data19, $data20, $data21, $data22, $data23, $data24, $data25);
}

function admin_chart_fac($con)
{

    // bar data
    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 00:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data1 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 01:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data2 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 02:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data3 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 03:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data4 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 04:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data5 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 05:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data6 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 06:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data7 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 07:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data8 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 08:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data9 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 09:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data10 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 10:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data11 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 11:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data12 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 12:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data13 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 13:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data14 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 14:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data15 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 15:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data16 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 16:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data17 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 17:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data18 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 18:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data19 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 19:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data20 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 20:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data21 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 21:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data22 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 22:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data23 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 23:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data24 = $data['total'];

    $sql_form_retrive = "SELECT COUNT(*) AS total FROM `answerfac` WHERE `Time` LIKE '% 24:%';";
    $result = mysqli_query($con, $sql_form_retrive);
    $data = mysqli_fetch_assoc($result);
    $data25 = $data['total'];

    return array($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12, $data13, $data14, $data15, $data16, $data17, $data18, $data19, $data20, $data21, $data22, $data23, $data24, $data25);
}

function get_count($con)
{
    $query = "SELECT COUNT(*) AS `count` FROM `answerpats`;";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_assoc($result);
    return $result['count'];
}

function get_count1($con)
{
    $query = "SELECT COUNT(*) AS `count` FROM `answersss`;";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_assoc($result);
    return $result['count'];
}

function get_count2($con)
{
    $query = "SELECT COUNT(*) AS `count` FROM `answerfac`;";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_assoc($result);
    return $result['count'];
}
//varaibe to store chart data
$chartdata = admin_chart_pap($con);
$chartdata1 = admin_chart_stu($con);
$chartdata2 = admin_chart_fac($con);

session_destroy();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    }
    </style>
</head>

<body class="p-0 m-0">
    <ul class="sidenav">
        <!-- to destroy session -->
        <li style="padding-bottom:0px"><a class="font-mono" href="adminlogin.php" target="_self">Back</a></li>
    </ul>
    <br />
    <br />
    <br />
    <div class="bg-[#ffffff] text-center content" style="padding:0.5rem">
        <!-- This requires Tailwind CSS v2.0+ -->
        <div class=" bg-[#ffffff] text-center p-3 m-2">
            <!-- <img src="https://c.tenor.com/iUBQduqPqH4AAAAM/badform-gymfail.gif" alt=""> -->

            <input type="hidden" id="count" value="<?php echo get_count($con); ?>">
            <input type="hidden" id="_count" value="<?php echo get_count1($con); ?>">
            <input type="hidden" id="__count" value="<?php echo get_count2($con); ?>">
            <br />
            <p class="myfont" style="text-align:start">PAP Forms :</p>
            <br />
            <div class="chart_con">
                <!-- chart js -->
                <canvas id="myChart" style="padding:1rem;position: relative;height:40vh; width:69vw;"></canvas>
                <br>
                <br>
                <div class="li">
                    <?php
                    $query = "SELECT `ctrlid`,`tname`,`subject` FROM answerpats;";
                    $result = mysqli_query($con, $query);
                    echo "<table style=\"text-align:left\">";
                    echo '<tr>
                    <th>' . 'Control-id' . '</th>
                    <th>' . 'Teacher' . '</th>
                    <th>' . 'Subject' . '</th>
                    </tr>';

                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                        <td>' . $row['ctrlid'] . '</td>
                        <td>' . $row['tname'] . '</td>
                        <td>' . $row['subject'] . '</td>
                        </tr>';
                    }
                    echo '</table>';
                    ?>
                </div>
                <br>
                <br>
                <!-- form post method -->
                <!-- download ans-pats list -->
                <form method="POST" action="xlxs_gen.php">
                    <input type="submit" name="export" title="download answerpats.xlxs"
                        class="font-mono text-center bg-[#006eff] p-3 m-1 hover:bg-slate-500 rounded transition-all duration-500"
                        value="answerpats" />
                    <br />
                </form>
                <!-- more list not possible reason procastination -->
            </div>
            <br />
            <br />
            <p class="myfont" style="text-align:start">Student Forms :</p>
            <br />
            <div class="chart_con">
                <!-- chart js -->
                <canvas id="myChart1" style="padding:1rem;position: relative; height:40vh; width:69vw;"></canvas>
                <br />
                <br>
                <br>
                <div class="li">
                    <?php
                    $query = "SELECT `name`,`rollno`,`programme` FROM answersss;";
                    $result = mysqli_query($con, $query);
                    echo "<table style=\"text-align:left\">";
                    echo '<tr>
                    <th>' . 'Control-id' . '</th>
                    <th>' . 'Name' . '</th>
                    <th>' . 'Programme' . '</th>
                    </tr>';

                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>
                        <td>' . $row['rollno'] . '</td>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['programme'] . '</td>
                        </tr>';
                    }
                    echo '</table>';
                    ?>
                </div>
                <br>
                <br>
            </div>
            <br />
            <br />
            <p class="myfont" style="text-align:start">Faculty Forms :</p>
            <br />
            <div class="chart_con">
                <!-- chart js -->
                <canvas id="myChart2" style="padding:1rem;height:40vh;position: relative;width:60vw;"></canvas>
                <br />
                <br />
            </div>
        </div>
        <br />
        <div class="footer-copyright" style="position:relative;">
            <br />
            <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_blank"
                    class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                    href="../../../personal.html" class="text-[blue] hover:underline " target="_blank">Contributors</a>
                <br />
        </div>
        <!-- php js bridge -->
        <input id="data1" type="hidden" value="<?php echo $chartdata[0] ?>">
        <input id="data2" type="hidden" value="<?php echo $chartdata[1] ?>">
        <input id="data3" type="hidden" value="<?php echo $chartdata[2] ?>">
        <input id="data4" type="hidden" value="<?php echo $chartdata[3] ?>">
        <input id="data5" type="hidden" value="<?php echo $chartdata[4] ?>">
        <input id="data6" type="hidden" value="<?php echo $chartdata[5] ?>">
        <input id="data7" type="hidden" value="<?php echo $chartdata[6] ?>">
        <input id="data8" type="hidden" value="<?php echo $chartdata[7] ?>">
        <input id="data9" type="hidden" value="<?php echo $chartdata[8] ?>">
        <input id="data10" type="hidden" value="<?php echo $chartdata[9] ?>">
        <input id="data11" type="hidden" value="<?php echo $chartdata[10] ?>">
        <input id="data12" type="hidden" value="<?php echo $chartdata[11] ?>">
        <input id="data13" type="hidden" value="<?php echo $chartdata[12] ?>">
        <input id="data14" type="hidden" value="<?php echo $chartdata[13] ?>">
        <input id="data15" type="hidden" value="<?php echo $chartdata[14] ?>">
        <input id="data16" type="hidden" value="<?php echo $chartdata[15] ?>">
        <input id="data17" type="hidden" value="<?php echo $chartdata[16] ?>">
        <input id="data18" type="hidden" value="<?php echo $chartdata[17] ?>">
        <input id="data19" type="hidden" value="<?php echo $chartdata[18] ?>">
        <input id="data20" type="hidden" value="<?php echo $chartdata[19] ?>">
        <input id="data21" type="hidden" value="<?php echo $chartdata[20] ?>">
        <input id="data22" type="hidden" value="<?php echo $chartdata[21] ?>">
        <input id="data23" type="hidden" value="<?php echo $chartdata[22] ?>">
        <input id="data24" type="hidden" value="<?php echo $chartdata[23] ?>">
        <input id="data25" type="hidden" value="<?php echo $chartdata[24] ?>">
        <!-- stu -->
        <input id="_data1" type="hidden" value="<?php echo $chartdata1[0] ?>">
        <input id="_data2" type="hidden" value="<?php echo $chartdata1[1] ?>">
        <input id="_data3" type="hidden" value="<?php echo $chartdata1[2] ?>">
        <input id="_data4" type="hidden" value="<?php echo $chartdata1[3] ?>">
        <input id="_data5" type="hidden" value="<?php echo $chartdata1[4] ?>">
        <input id="_data6" type="hidden" value="<?php echo $chartdata1[5] ?>">
        <input id="_data7" type="hidden" value="<?php echo $chartdata1[6] ?>">
        <input id="_data8" type="hidden" value="<?php echo $chartdata1[7] ?>">
        <input id="_data9" type="hidden" value="<?php echo $chartdata1[8] ?>">
        <input id="_data10" type="hidden" value="<?php echo $chartdata1[9] ?>">
        <input id="_data11" type="hidden" value="<?php echo $chartdata1[10] ?>">
        <input id="_data12" type="hidden" value="<?php echo $chartdata1[11] ?>">
        <input id="_data13" type="hidden" value="<?php echo $chartdata1[12] ?>">
        <input id="_data14" type="hidden" value="<?php echo $chartdata1[13] ?>">
        <input id="_data15" type="hidden" value="<?php echo $chartdata1[14] ?>">
        <input id="_data16" type="hidden" value="<?php echo $chartdata1[15] ?>">
        <input id="_data17" type="hidden" value="<?php echo $chartdata1[16] ?>">
        <input id="_data18" type="hidden" value="<?php echo $chartdata1[17] ?>">
        <input id="_data19" type="hidden" value="<?php echo $chartdata1[18] ?>">
        <input id="_data20" type="hidden" value="<?php echo $chartdata1[19] ?>">
        <input id="_data21" type="hidden" value="<?php echo $chartdata1[20] ?>">
        <input id="_data22" type="hidden" value="<?php echo $chartdata1[21] ?>">
        <input id="_data23" type="hidden" value="<?php echo $chartdata1[22] ?>">
        <input id="_data24" type="hidden" value="<?php echo $chartdata1[23] ?>">
        <input id="_data25" type="hidden" value="<?php echo $chartdata1[24] ?>">
        <!-- fac -->
        <!-- stu -->
        <input id="__data1" type="hidden" value="<?php echo $chartdata2[0] ?>">
        <input id="__data2" type="hidden" value="<?php echo $chartdata2[1] ?>">
        <input id="__data3" type="hidden" value="<?php echo $chartdata2[2] ?>">
        <input id="__data4" type="hidden" value="<?php echo $chartdata2[3] ?>">
        <input id="__data5" type="hidden" value="<?php echo $chartdata2[4] ?>">
        <input id="__data6" type="hidden" value="<?php echo $chartdata2[5] ?>">
        <input id="__data7" type="hidden" value="<?php echo $chartdata2[6] ?>">
        <input id="__data8" type="hidden" value="<?php echo $chartdata2[7] ?>">
        <input id="__data9" type="hidden" value="<?php echo $chartdata2[8] ?>">
        <input id="__data10" type="hidden" value="<?php echo $chartdata2[9] ?>">
        <input id="__data11" type="hidden" value="<?php echo $chartdata2[10] ?>">
        <input id="__data12" type="hidden" value="<?php echo $chartdata2[11] ?>">
        <input id="__data13" type="hidden" value="<?php echo $chartdata2[12] ?>">
        <input id="__data14" type="hidden" value="<?php echo $chartdata2[13] ?>">
        <input id="__data15" type="hidden" value="<?php echo $chartdata2[14] ?>">
        <input id="__data16" type="hidden" value="<?php echo $chartdata2[15] ?>">
        <input id="__data17" type="hidden" value="<?php echo $chartdata2[16] ?>">
        <input id="__data18" type="hidden" value="<?php echo $chartdata2[17] ?>">
        <input id="__data19" type="hidden" value="<?php echo $chartdata2[18] ?>">
        <input id="__data20" type="hidden" value="<?php echo $chartdata2[19] ?>">
        <input id="__data21" type="hidden" value="<?php echo $chartdata2[20] ?>">
        <input id="__data22" type="hidden" value="<?php echo $chartdata2[21] ?>">
        <input id="__data23" type="hidden" value="<?php echo $chartdata2[22] ?>">
        <input id="__data24" type="hidden" value="<?php echo $chartdata2[23] ?>">
        <input id="__data25" type="hidden" value="<?php echo $chartdata2[24] ?>">
        <script type="text/javascript" src="../../../Js/admin.js?v=1"></script>
    </div>
</body>
<script src="../../../Js/main.js?v=1" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>


</html>