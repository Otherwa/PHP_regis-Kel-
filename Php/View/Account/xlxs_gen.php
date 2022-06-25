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

$lab = array(
    'Positive and motivating attitude towards students.',
    'Readiness to resolve students doubts and general availability/accessibility to students.Positive and motivating attitude towards students.',
    'Worked hard to create a feeling of belongingness in a classroom without walls.',
    'Command over the subject.',
    'Skills in making the subject interesting.',
    'Command over the medium of instruction(language) / communication skills',
    'Clarity in approach / thinking.',
    'Punctuality and regularity in taking lectures and practicals',
    'Proficiency in handling online classroom platforms.',
    'Time management skill \ skill of completing the syllabus with doubt solving sessions in time.',
    'Use of case studies, illustration, current events, anecdotes in teaching.ommand over the subject.',
    'Use of interactive teaching - seminars, tutorials, quizzes, assignments etc.',
    'Command over the medium of instruction(language) / communication skills',
    'Giving references for further reading.',
    'Conducting evaluation by periodic tests / questions answer sessions or by designing quizzes / tests / assignments / examinations and projects to evaluate students.',
    'Encouraging students to apply in real life whatever they have learnt in classrooms.',
    'Counselling : Career / placement / personal.',
    'Stimulating a sense of social responsibility.',
);
// session_destroy(); xls gen session
$_SESSION['tec'] = $_POST['teacher'];
$_SESSION['sub'] = $_POST['subject'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insights</title>
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
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"
        integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    #i1 {
        display: flex;
        flex-wrap: wrap;
    }

    #i1 .c {
        padding: 0.9rem;
        height: 40%;
        width: 100vw;
        flex: 1 1 400px;
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

    @media screen and (max-width: 768px) {
        #i1 .c {
            padding: 0.7rem;
            height: 50vh;
            width: 100vw;
        }

        .intr p {
            font-size: 0.9rem;
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
            <?php echo $_POST['teacher'] . " - [" . $_POST['subject'] . "]"; ?></p>
        <p>
            Total Records :
            <?php echo ($_SESSION['count'] / 18); ?></p>
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
        <form method="POST" action="down_xl.php">
            <!-- set tname -->
            <input type="submit" value="Download.Xls" style="margin:0" class="form__button" name="export">
        </form>
        <br>
    </div>
    <br>
    <div class="footer-copyright text-center" style="padding:1rem;position:relative;">
        <br />
        <p style="font-family:monospace">&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html"
                target="_self" class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                href="../../../personal.html" class="text-[blue] hover:underline ">Contributors</a>
        </p>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"
    integrity="sha512-vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../../Js/xlgen.js" type="text/javascript"></script>


</html>