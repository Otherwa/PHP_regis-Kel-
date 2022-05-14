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

function list_disp($con)
{
    $sql_form_retrive = "SELECT * FROM `answerpats`;";
    $result = mysqli_query($con, $sql_form_retrive);
    echo '<table style="text-align:left"> 
    <tr>
    <th class="myfont">Ctrlid</th>
    <th class="myfont">Class</th>
    <th class="myfont">Name</th>
    </tr>';
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td>' . $row['ctrlid'] . '</td>' . '<td>' . $row['cname'] . '</td>' . '<td>' . $row['tname'] . '</td>' . '</td>';
        echo '<tr>';
    }

    echo '</table>';
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

    th,
    td {
        padding: 1rem;
        font-family: monospace;
        font-weight: bold;
    }

    /* inline nav */
    .overfolo::-webkit-scrollbar {
        width: 9px;
    }

    /* Track */

    .overfolo::-webkit-scrollbar-track {
        box-shadow: inset 0 0 2px grey;
    }

    /* Handle */

    .overfolo::-webkit-scrollbar-thumb {
        background: #006eff;
    }

    /* Handle on hover */

    .overfolo::-webkit-scrollbar-thumb:hover {
        background: #006effb7;
    }
    </style>
</head>

<body class="p-1 m-0">
    <br />
    <br />
    <br />
    <!-- This requires Tailwind CSS v2.0+ -->
    <div class=" bg-[#ffffff] text-center p-3 m-2">
        <!-- <img src="https://c.tenor.com/iUBQduqPqH4AAAAM/badform-gymfail.gif" alt=""> -->
        <p class="text-4xl myfont antialiased tracking-normal md:text-4xl overline leading-loose">Hey Adminisrator.</p>
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
                value="answerpats.xlxs" />
            <br />
            <p>Does not work in mobile browsers.</p>
        </form>
        <br />
        <br />
        <div class="overfolo"
            style="border-radius:0.5rem;overflow-y:auto;width:75%;height:20rem;display:inline-block;background-color:gainsboro;">
            <?php list_disp($con); ?>
        </div>
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
<script src="../../../Js/main.js" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>


</html>