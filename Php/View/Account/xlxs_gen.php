<?php
//export.php  
session_start();
include('../connect.php');

$con = get_con();
$output = "QUERY";

$total = Get_count();
if ($total == 0) {
    header('Location: admin.php');
    $_SESSION['name'] = "error";
}

if (isset($_POST["export"])) {
    $review = array(); // store data
    $con = get_con();
    // store data in 2x2
    // echo "2x2 Store <br>";
    for ($a = 11; $a < 29; $a++) {
        $temp_array = array();
        // echo "<br>";
        for ($rate = 1; $rate < 8; $rate++) {
            $query = "SELECT COUNT(a" . $a  . ") as count1 from answerpats WHERE tname =\"" . $_POST["teacher"] . "\" AND cname=\"" . $_POST["class"] . "\" AND sem=\"" . $_POST["sem"] .  "\" AND subject=\"" . $_POST["subject"] . "\""  . " AND a" . $a . "=\"" . $rate . "\";";
            $result = mysqli_query($con, $query);
            $result = mysqli_fetch_assoc($result);
            // echo " " . $result['count1'];
            array_push($temp_array, $result['count1']);
        }
        array_push($review, $temp_array);
    }
    Get_Question_Rating($review, $total);
}


// functions
// post count
function Get_Question_Rating($review, $total)
{
    echo "<div class= \"hiddiv\" style=\"Display: none;\">";
    for ($a = 0; $a < 18; $a++) {
        echo "<br>";
        for ($rate = 0; $rate < 7; $rate++) {
            echo "<input type='hidden' id=\"" . $a . $rate . "\" value=\"" . ($review[$a][$rate] * 100 / $total) . "\">";
        }
    }
    echo "</div>";
}


// total number
function Get_count()
{
    $con = get_con();

    $query = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_POST['teacher'] . "\"AND subject =\"" . $_POST['subject'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);
    $result = $result['count1'];
    return ($result);
}

// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ff6600">
    <!-- icon -->
    <link rel="stylesheet" href="../../../Css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/form.css" />
    <link type="image/png" sizes="16x16" rel="icon" href="../../../imgs/1611814068005.jpg" />
    <!-- chart js API -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    #i1 {
        display: flex;
        flex-wrap: wrap;
    }

    #i1 .c {
        padding: 1rem;
        height: 35%;
        width: 70%;
        border-style: solid;
        margin: 1rem;
        flex: 1 1 569px;
    }

    /* mob res temp */
    @media screen and (max-width: 768px) {
        #i1 .c {
            padding: 1rem;
            height: 90%;
            width: 100%;
        }
    }

    #editor {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    </style>
</head>

<body>
    <p style="font-size:1.4rem;text-align:center;padding:1rem;font-family:monospace;text-decoration:underline">Detail
        Insights</p>
    <p style="font-size:1.2rem;text-align:center;font-family:monospace" id="name">
        <?php echo $_POST['teacher']; ?></p>
    <p style="font-size:1.2rem;text-align:center;font-family:monospace" id="subjec">
        <?php echo $_POST['subject']; ?></p>
    <div id="i1">
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                1.
            </p>
            <canvas id="myChart" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                2.
            </p>
            <canvas id="myChart1" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                3.
            </p>
            <canvas id="myChart2" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                4.
            </p>
            <canvas id="myChart3" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                5.
            </p>
            <canvas id="myChart4" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                6.
            </p>
            <canvas id="myChart5" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                7.
            </p>
            <canvas id="myChart6" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                8.
            </p>
            <canvas id="myChart7" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                9.
            </p>
            <canvas id="myChart8" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                10.
            </p>
            <canvas id="myChart9" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                11.
            </p>
            <canvas id="myChart10" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                12.
            </p>
            <canvas id="myChart11" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                13.
            </p>
            <canvas id="myChart12" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                14.
            </p>
            <canvas id="myChart13" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                15.
            </p>
            <canvas id="myChart14" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                16.
            </p>
            <canvas id="myChart15" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                17.
            </p>
            <canvas id="myChart16" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace;padding:1rem">
                18.
            </p>
            <canvas id="myChart17" style="padding:1.19rem;"></canvas>
        </div>
    </div>
    <div id="editor">
        <!-- for pdf use -->
        <input type="button" value="Download" style="margin:0" id="sub" onclick="downpdf()">
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://parall.ax/parallax/js/jspdf.js"></script>
<script src="../../../Js/xlgen.js" type="text/javascript"></script>

</html>