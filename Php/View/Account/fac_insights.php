<?php
ob_start();
//export.php  
session_start();
include('../connect.php');

$con = get_con();
$output = "QUERY";

$total = Get_count();
if ($total == 0) {
    header('Location: which.php');
    $_SESSION['namesub'] = "error";
}

if (isset($_POST["export"])) {
    $review = array(); // store data
    $con = get_con();
    // store data in 2x2
    // echo "2x2 Store <br>";
    for ($a = 11; $a < 36; $a++) {
        $temp_array = array();
        // echo "<br>";
        for ($rate = 1; $rate < 8; $rate++) {
            $query = "SELECT COUNT(a" . $a  . ") as count1 from answerfac WHERE department =\"" . $_POST["programme"] . "\" AND a" . $a . "=\"" . $rate . "\";";
            $result = mysqli_query($con, $query);
            $result = mysqli_fetch_assoc($result);
            // echo " " . $result['count1'];
            array_push($temp_array, $result['count1']);
        }
        array_push($review, $temp_array);
    }
    // 
    Get_Question_Rating($review, $total);
}


// functions
// post count
function Get_Question_Rating($review, $total)
{
    echo "<div class= \"hiddiv\" style=\"Display: none;\">";
    for ($a = 0; $a < 26; $a++) {
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

    $query = "SELECT count(*) as `count1` from `answerfac` WHERE department =\"" . $_POST['programme'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);
    $result = $result['count1'];
    return ($result);
}

$lab = array(
    'Wi-Fi facility provided in the college for online classes was effective. Please rate it in the form of percentage of the time it was effective',
    'Communication regarding upcoming meetings/events in the context of teaching, learning and examination has been effective and timely',
    'Faculty members are encouraged to update their knowledge and skills',
    'Faculty members are encouraged to register for M.Phil., Ph.D. and Post-Doctoral Degree/Project',
    'Faculty members get duty leave to participate in seminars / workshops / symposia / conferences',
    'Faculty members get reimbursement of registration fees when they participate in seminars / workshops / symposia / conferences',
    'Faculty members are encouraged to organize seminars / workshops / symposia / conferences',
    'Faculty members are encouraged to establish linkage with Industry',
    'The Management-Staff get-together is held every year',
    'The management has provided updated infrastructure required for effective teaching-learning process',
    'The remuneration/salary that you receive for your services to the college is satisfactory (Only for SFC/Ad-Hoc Staff)',
    'The Management acknowledges higher degrees/qualifications acquired by staff members with financial increments (Only for SFC/Ad-Hoc Staff)',
    'The Management acknowledges higher degrees/qualifications acquired by staff members with financial increments',
    'The registrar and other administrative staff of the college are accessible',
    'The registrar and other administrative staff of the college address the issues and concerns related to administration effectively',
    'The IQAC is effective in promoting quality initiatives in the college',
    'The staffroom is clean and well maintained',
    'Toilets and washrooms are clean and well maintained',
    'Clean drinking water is available in the college',
    'Food quality in the canteen is good',
    'The rates of the food items in the canteen are reasonable',
    'Attitude of the canteen staff and service received was good',
    'Attitude of the canteen staff and service received was good',
    'Way of cataloguing and arrangement of books in the library is effective',
    'Availability and accessibility of online educational resources in college on library facility is good'
);

// session_destroy(); xls gen session for identification
// session_destroy();
// close connection
mysqli_close($con);
$_SESSION['programme'] = $_POST['programme'];

ob_end_flush();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SSS Insights</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#ff6600">
    <!-- icon -->
    <link rel="stylesheet" href="../../../Css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/form.css" />
    <!-- icon -->
    <link type="image/png" sizes="96x96" rel="icon" href="https://vazecollege.net/PATS/imgs/1611814068005.jpg">
    <!-- chart js API -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js" integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        #i1 {
            display: flex;
            flex-wrap: wrap;
        }

        #i1 .c {
            padding: 0.9rem;
            height: auto;
            width: 100vw;
            flex: 2 1 500px;
            font-size: 0.9rem;
            background-color: rgba(0, 0, 0, 0.025);
        }

        #i1 .c p {
            padding: 0.5rem;
            text-align: justify;
            font-weight: 100;
        }

        /* mob res temp */


        #editor {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        body {
            background-color: white;
        }

        .intr p {
            font-size: 1.12rem;
            text-align: center;
            font-family: monospace;
        }

        /* tab res */
        @media screen and (max-width: 768px) {
            #i1 .c {
                padding: 0.7rem;
                height: 60vh;
                width: 100vw;
            }

            .intr p {
                font-size: 0.9rem;
            }
        }

        @media screen and (max-width: 468px) {
            #i1 .c {
                padding: 0.7rem;
                height: 50vh;
                width: 100vw;
            }
        }
    </style>
</head>

<body>
    <br>
    <p style="font-size:1.12rem;text-align:center;font-family:monospace;text-decoration:underline">Detail
        Insights</p>
    <br>
    <br>
    <div class="intr">
        <p>
            <?php echo $_POST['programme']; ?></p>
        <p>
            Total Records :
            <?php echo Get_count(); ?></p>
        <br>
    </div>
    <div id="i1">
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                1. <?php echo $lab[0]; ?>
            </p>
            <canvas id="myChart" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                2. <?php echo $lab[1]; ?>
            </p>
            <canvas id="myChart1" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                3. <?php echo $lab[2]; ?>
            </p>
            <canvas id="myChart2" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                4. <?php echo $lab[3]; ?>
            </p>
            <canvas id="myChart3" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                5. <?php echo $lab[4]; ?>
            </p>
            <canvas id="myChart4" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                6. <?php echo $lab[5]; ?>
            </p>
            <canvas id="myChart5" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                7. <?php echo $lab[6]; ?>
            </p>
            <canvas id="myChart6" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                8. <?php echo $lab[7]; ?>
            </p>
            <canvas id="myChart7" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                9. <?php echo $lab[9]; ?>
            </p>
            <canvas id="myChart8" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                10. <?php echo $lab[9]; ?>
            </p>
            <canvas id="myChart9" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                11. <?php echo $lab[10]; ?>
            </p>
            <canvas id="myChart10" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                12. <?php echo $lab[11]; ?>
            </p>
            <canvas id="myChart11" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                13. <?php echo $lab[12]; ?>
            </p>
            <canvas id="myChart12" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                14. <?php echo $lab[13]; ?>
            </p>
            <canvas id="myChart13" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                15. <?php echo $lab[14]; ?>
            </p>
            <canvas id="myChart14" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                16. <?php echo $lab[15]; ?>
            </p>
            <canvas id="myChart15" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                17. <?php echo $lab[16]; ?>
            </p>
            <canvas id="myChart16" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                18. <?php echo $lab[17]; ?>
            </p>
            <canvas id="myChart17" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                19. <?php echo $lab[18]; ?>
            </p>
            <canvas id="myChart18" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                20. <?php echo $lab[19]; ?>
            </p>
            <canvas id="myChart19" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                21. <?php echo $lab[20]; ?>
            </p>
            <canvas id="myChart20" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                22. <?php echo $lab[21]; ?>
            </p>
            <canvas id="myChart21" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                23. <?php echo $lab[22]; ?>
            </p>
            <canvas id="myChart22" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                24. <?php echo $lab[23]; ?>
            </p>
            <canvas id="myChart23" style="padding:1.19rem;"></canvas>
        </div>
        <div class="c">
            <p style="text-align:left;font-family:monospace">
                25. <?php echo $lab[24]; ?>
            </p>
            <canvas id="myChart24" style="padding:1.19rem;"></canvas>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div id="editor" style="display:flex;padding:0.2rem">
        <br>
        <!-- for pdf use -->
        <input type="button" value="Download.Pdf" style="margin:0" id="sub" onclick="downpdf()">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <form method="POST" action="down_xl3.php">
            <!-- set tname -->
            <input type="submit" value="Download.Xls" style="margin:0" class="form__button" name="export">
        </form>
        <br>
    </div>
    <br>
    <div class="footer-copyright text-center" style="padding:1rem;position:relative;">
        <br />
        <p style="font-family:monospace">&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_self" class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a href="../../../personal.html" class="text-[blue] hover:underline ">Contributors</a>
        </p>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" integrity="sha512-vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../../Js/fac_insights.js" type="text/javascript"></script>


</html>