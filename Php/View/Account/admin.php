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
function admin_chart($con)
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

function list_disp($con)
{
    $sql_form_retrive = "SELECT * FROM `answerpats`;";
    $result = mysqli_query($con, $sql_form_retrive);
    echo '<table style="text-align:left"> 
    <tr>
    <th><p class="myfont">Ctrlid</p></th>
    <th><p  class="myfont">Class</p></th>
    <th><p  class="myfont">Name</p></th>
    </tr>';
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['ctrlid'] . '</td>' . '<td>' . $row['cname'] . '</td>' . '<td>' . $row['tname'] . '</td>' . '</td>';
        echo '<tr>';
    }

    echo '</table>';
}
function get_count($con)
{
    $query = "SELECT COUNT(*) AS `count` FROM `answerpats`;";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_assoc($result);
    return $result['count'];
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
            <br />
            <div style="text-align:right">
                <select onchange="Togglegraph_list(this.value)"
                    style="width: auto;padding: 2px;margin: 2px;font-family: monospace;font-size: 0.99rem;font-weight: bold;color: #0559c7;border-style: solid;border-width: 0.5px;border-color: #8d949d;background-color: #ffffff;border-radius: 3px;">
                    <option value="graph">Graph</option>
                    <option value="list">List</option>
                </select>
            </div>
            <br />
            <p class="myfont" style="text-align:start">Forms :</p>
            <br />
            <!-- chart js -->
            <canvas id="myChart"
                style="padding:0rem 0.4rem 0rem 0.4rem;height:50vh; width:75vw;background-color:rgba(0,0,0,0.1)"></canvas>
            <br />
            <br />

            <br />
            <div class="overfolo" id="list"
                style="border-radius:0.5rem;overflow-y:auto;width:100%;height:30rem;display:inline-block;background-color:gainsboro;">
                <?php list_disp($con); ?>
            </div>

            <br />
            <br />

            <div class="footer-copyright">
                <br />
                <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_blank"
                        class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                        href="../../../personal.html" class="text-[blue] hover:underline "
                        target="_blank">Contributors</a>
                    <br />
            </div>
            <br />
            <!-- form post method -->
            <!-- download ans-pats list -->
            <form method="POST" action="xlxs_gen.php">
                <input type="submit" name="export" title="download answerpats.xlxs"
                    class="font-mono text-center bg-[#006eff] p-3 m-1 hover:bg-slate-500 rounded transition-all duration-500"
                    value="answerpats" />
                <br />
            </form>
            <!-- more list not possible reason procastination -->
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

        <script type="text/javascript" src="../../../Js/admin.js"></script>
    </div>
</body>
<script src="../../../Js/main.js" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>


</html>