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
        width: 3px;
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
            <p class="text-4xl myfont antialiased tracking-normal md:text-4xl overline leading-loose">Hey
                <?php echo $name[0]; ?>
            </p>
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
            <canvas id="myChart" width="450" height="150"
                style="background-color:bisque;padding: 1rem;border-radius: 0.5rem;"></canvas>
            <br />
            <br />

            <br />
            <div class="overfolo" id="list"
                style="border-radius:0.5rem;overflow-y:auto;width:100%;height:30rem;display:inline-block;background-color:gainsboro;">
                <?php list_disp($con); ?>
            </div>



            <div class=" footer-copyright" style="bottom: -13rem;">
                <br />
                <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_blank"
                        class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                        href="../../../personal.html" class="text-[blue] hover:underline " target="_blank">Contact</a>
                    <br />
            </div>
            <br />
            <!-- form post method -->
            <form method="POST" action="xlxs_gen.php">
                <input type="submit" name="export" title="download answerpats.xlxs"
                    class="font-mono text-center bg-[#006eff] p-3 m-1 hover:bg-slate-500 rounded transition-all duration-500"
                    value="answerpats" />
                <br />
            </form>
            <br />
        </div>
        <!-- php js bridge -->
        <input id="data" type="hidden" value="<?php echo $chartdata ?>">
        <script type="text/javascript" src="../../../Js/admin.js"></script>
    </div>
</body>
<script src="../../../Js/main.js" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>


</html>