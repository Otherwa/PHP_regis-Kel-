<?php
include('../connect.php');

//on click
session_start();

if (!isset($_SESSION['setPAP'])) {
    // redirect if not set
    header('Location: forms.php');
}

// establish connection
$con = get_con();
// err_msgs
$var1 = 1;


if (isset($_POST['submit'])) {

    //session statuses
    $status = session_status();
    if ($status == PHP_SESSION_NONE) {
        //There is no active session
        session_start();
    } elseif ($status == PHP_SESSION_DISABLED) {
        //Sessions are not available
        $stat = 1;
    } elseif ($status == PHP_SESSION_ACTIVE) {
        //Destroy current and start new one
        $stat = 2;
    }

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $rollno = mysqli_real_escape_string($con, $_POST['rollno']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $division = mysqli_real_escape_string($con, $_POST['division']);
    $semester = mysqli_real_escape_string($con, $_POST['semester']);
    $paper = mysqli_real_escape_string($con, $_POST['subject']);
    $teacher = mysqli_real_escape_string($con, $_POST['teacher']);

    // chech if set defaulu ' '(space); 
    if (isset($name) && isset($rollno) && isset($class) && isset($division) && isset($semester) && isset($paper) && isset($teacher)) {

        if ($name == '--' || $rollno == '--' || $class == '--' || $division == '--' || $semester == '--' || $paper == '--' || $paper == "--" || $teacher == '--') {
            echo "<script>alert('Kindly Check Your Form Once Again 🤓');</script>";
            // session_destroy();
        } else {
            // double verify student
            $is_stu = verify_student($rollno, $con);

            // check stu active ctrlid
            if ($is_stu != true) {
                echo "<script>alert('Something Wrong with Your Control Id 🤓');</script>";
                // session_destroy();

            } else {

                //data submission func
                get_ratings($con, $name, $teacher, $rollno, $class, $division, $semester, $paper);
            }
        }
    } else {
        echo "<script>alert('Something Wrong with Your Form Lol 🤓');</script>";
    }
}

// all fucntions


// get division
function division($con)
{
    $query = "SELECT DISTINCT  `division` FROM `activectrlid` order by `division` ASC";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value =\"" . $row['division'] . "\">" . $row['division'] . "</option>";
    }
}

// double ctrlid check during submission
function verify_student($rollno, $con)
{
    $query = "SELECT * FROM `activectrlid` WHERE ctrlid = '$rollno'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}

// sql teacher_name get
// data submit func
function get_ratings($con, $name, $teacher, $rollno, $class, $division, $semester, $paper)
{

    if (isset($_POST['rating1_1']) && isset($_POST['rating2_1']) && isset($_POST['rating3_1']) && isset($_POST['rating1_2']) && isset($_POST['rating2_2']) && isset($_POST['rating3_2']) && isset($_POST['rating4_2']) && isset($_POST['rating5_2']) && isset($_POST['rating6_2']) && isset($_POST['rating7_2']) && isset($_POST['rating1_3']) && isset($_POST['rating2_3']) && isset($_POST['rating3_3']) && isset($_POST['rating4_3']) && isset($_POST['rating5_3']) && isset($_POST['rating6_3']) && isset($_POST['rating7_3']) && isset($_POST['rating8_3'])) {

        $rating1_1 = mysqli_real_escape_string($con, $_POST['rating1_1']);
        $rating2_1 = mysqli_real_escape_string($con, $_POST['rating2_1']);
        $rating3_1 = mysqli_real_escape_string($con, $_POST['rating3_1']);
        // second rating block
        $rating1_2 = mysqli_real_escape_string($con, $_POST['rating1_2']);
        $rating2_2 = mysqli_real_escape_string($con, $_POST['rating2_2']);
        $rating3_2 = mysqli_real_escape_string($con, $_POST['rating3_2']);
        $rating4_2 = mysqli_real_escape_string($con, $_POST['rating4_2']);
        $rating5_2 = mysqli_real_escape_string($con, $_POST['rating5_2']);
        $rating6_2 = mysqli_real_escape_string($con, $_POST['rating6_2']);
        $rating7_2 = mysqli_real_escape_string($con, $_POST['rating7_2']);
        // third rating block
        $rating1_3 = mysqli_real_escape_string($con, $_POST['rating1_3']);
        $rating2_3 = mysqli_real_escape_string($con, $_POST['rating2_3']);
        $rating3_3 = mysqli_real_escape_string($con, $_POST['rating3_3']);
        $rating4_3 = mysqli_real_escape_string($con, $_POST['rating4_3']);
        $rating5_3 = mysqli_real_escape_string($con, $_POST['rating5_3']);
        $rating6_3 = mysqli_real_escape_string($con, $_POST['rating6_3']);
        $rating7_3 = mysqli_real_escape_string($con, $_POST['rating7_3']);
        $rating8_3 = mysqli_real_escape_string($con, $_POST['rating8_3']);
        $suggest = mysqli_real_escape_string($con, $_POST['suggest']);
        // echo
        // get academic_year from teacher table for sepcific 
        $query = "SELECT `academic_year` FROM `teachers` WHERE tname = '$teacher' AND cname = '$class' ;";
        $result = mysqli_query($con, $query);
        $result = mysqli_fetch_assoc($result);
        $academic_year = $result['academic_year'];

        // start config each time of year
        // check if already
        // concat saftey
        // dead code ahead scared to remove [block start]
        $query = "SELECT * FROM `answerpats` WHERE ctrlid =\"" . $rollno . "\"" . " AND cname =\"" . $class . "\"" . " AND tname =\"" . $teacher . "\"" . " AND sem =\"" . $semester . "\"" . " AND subject =\"" . $paper . "\"" . " AND academic_year =\"" . $academic_year . "\";";
        $result = mysqli_query($con, $query);
        $result = mysqli_num_rows($result);
        if ($result > 0) {
            echo "<script>alert('Your submitted Form already exists 🤡');</script>";
            // redirect flag
            // if ajax req fails in case
            // session_destroy();
        } else {
            //[block end]
            $programme = get_prg($con, $rollno);
            // change year year(curdate)
            $query = "INSERT INTO `answerpats` (`ctrlid`,`programme`, `cname`, `tname`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `a28`, `suggession`, `division`, `sem`, `subject`, `academic_year`,`Time`) 
            VALUES ('$rollno','$programme','$class','$teacher','$rating1_1','$rating2_1','$rating3_1','$rating1_2','$rating2_2','$rating3_2','$rating4_2','$rating5_2','$rating6_2','$rating7_2','$rating1_3','$rating2_3','$rating3_3','$rating4_3','$rating5_3','$rating6_3','$rating7_3','$rating8_3','$suggest','$division','$semester','$paper','$academic_year',current_timestamp());";
            // execute query
            mysqli_query($con, $query);
            $_SESSION['name'] = $name;

            // https response
            header('Location: formsubmit.php');
            // close connection
            mysqli_close($con);
        }
    } else {
        echo "<script>alert('Please select all the fields given below 🤓');</script>";
        //session_destroy();
        // close connection
        mysqli_close($con);
    }
}

// function

function get_prg($con, $rollno)
{
    $query = "SELECT `programme` FROM `activectrlid` WHERE ctrlid = \"" . $rollno . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_assoc($result);
    $result = $result['programme'];
    return $result;
}


?>


<html lang="en">

<head>
    <title>PAT's Form</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind css -->
    <!-- <script src="https://cdn.tailwindcss.com"></>  -->
    <link rel="stylesheet" type="text/css" href="../../../dist/output.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/form.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/nav.css" />
    <!-- title color -->
    <meta name="theme-color" content="#ff6600" />
    <!-- Gfonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link type="image/png" sizes="16x16" rel="icon" href="../../../imgs/1611814068005.jpg" />
    <!-- num style -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <style>
    .myfont {
        font-family: "Bungee", cursive;
    }

    p {
        font-family: monospace;
    }
    </style>
</head>

<body class="p-0 m-0">
    <br />
    <br />
    <div class="bg-[#ffffff] text-center" style="padding:0.5rem">
        <br />
        <div class="l-form">
            <form method="POST" id="subcard" class="form">
                <fieldset>
                    <legend>
                        <h1 class="font-mono antialiased text-lg">Fill up</h1>
                    </legend>
                    <h1 class="form__title myfont" style=" font-size: 2.2rem; color: rgb(119, 195, 196);">
                        <span style="text-decoration: underline;font-size: 1.45rem;">PATS Question</span><br />
                        <span style="font-size: 1.4rem; font-family: 'Roboto', sans-serif; color: black;">
                            <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                                style="height: 3rem; margin-top: 1rem;" />
                        </span>
                    </h1>
                    <!-- feature req -->
                    <div class="form__div">
                        <input type="number" class="form__input" name="rollno" id="rollno" placeholder="e.g XXXXXXX289"
                            autocomplete="off" onInput="verify_stu()" />
                        <label for="" class="form__label">Control Id</label>
                    </div>
                    <p id="notvalid_roll"></p>
                    <!-- ajax ctrlid verify -->
                    <!-- <input type="hidden" id="msg"> -->
                    <!-- bug not value do not change -->
                    <div class="form__div">
                        <input type="text" class="form__input" name="name" id="name" placeholder="Full Name"
                            autocomplete="off" readonly />
                        <label for="" class="form__label">Name</label>
                    </div>
                    <br />
                    <!-- selected opts -->
                    <div class="form__div selectaltered">
                        <label for="class" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Class:</label>
                        <select name="class" id="class" onchange="FetchTeacher_from_class(this.value)">
                            <option value="--">--</option>
                            <option value="set">--</option>
                            <!-- list of classes -->
                        </select>
                    </div>
                    <div class="form__div selectaltered">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Division:</label>
                        <select name="division" id="divison">
                            <!-- php list get -->
                            <option value="--">--</option>
                            <?php division($con); ?>
                        </select>
                    </div>
                    <div class="form__div selectaltered">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Teacher
                            Name:</label>
                        <select style="width:5rem" name="teacher" id="teacher"
                            onchange=FetchSem_from_teacher(this.value)>
                            <option value="--">--</option>
                            <!-- get list -->
                            <!-- get list Ajax -->
                        </select>
                    </div>
                    <div class="form__div selectaltered">
                        <label for="semsester" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose
                            Semester:</label>
                        <select name="semester" id="semester" onchange="FetchSub_from_division(this.value)">
                            <option value="--">--</option>
                            <!-- get list Ajax-->
                            <!-- value as space character if no subject -->
                        </select>
                    </div>
                    <!-- paper selection -->
                    <div class="form__div selectaltered" id="semester_paper" style="display: block;">
                        <label for="subject" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose
                            Subject:</label>
                        <select id="subject" name="subject" onchange="Is_Form_Sent()">
                            <!-- get list Ajax-->
                            <option value="--">--</option>
                        </select>
                    </div>
                    <br>
                    <p id="msg_form"></p>
                    <br />
                    <p class="text-lg hover:underline"><code>Instructions to fill the questionnaire</code></p>
                    <br />
                    <ul class="msg">
                        <li>All questions should be
                            compulsorily attempted.</li>
                        <li>Each question has seven responses,
                            choose the most appropriate one.</li>
                    </ul>
                    <!-- selected opts -->
                    <div id="msg_set" style="display:none">
                        <!-- if msg displaynone -->
                        <ol>
                            <li>
                                Attitude Towards Students:
                                <br />
                                <br />
                                <ul>
                                    <li>
                                        Positive and motivating attitude towards students.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating1_1" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_1" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating1_1" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_1" value="4" />&nbsp;
                                                Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_1" value="5" />&nbsp; Good&nbsp;</p>
                                            <p> <input type="radio" name="rating1_1" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_1" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Readiness to resolve student's doubts and general availability / accessibility
                                        to
                                        students.Positive and motivating attitude towards students.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating2_1" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating2_1" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating2_1" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating2_1" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating2_1" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating2_1" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating2_1" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Worked hard to create a feeling of belongingness in a classroom without walls.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating3_1" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating3_1" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p> <input type="radio" name="rating3_1" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating3_1" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating3_1" value="5" />&nbsp; Good&nbsp; </p>
                                            <p><input type="radio" name="rating3_1" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating3_1" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                            <br />
                            <li>
                                Core Subject-related, teaching and Virtual classroom skills.
                                <br />
                                <br />
                                <ul>
                                    <li>
                                        Command over the subject.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating1_2" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_2" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating1_2" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_2" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_2" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating1_2" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_2" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Skills in making the subject interesting.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating2_2" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating2_2" value="2" />&nbsp; Poor&nbsp; </p>
                                            <p> <input type="radio" name="rating2_2" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating2_2" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating2_2" value="5" />&nbsp; Good&nbsp;</p>
                                            <p> <input type="radio" name="rating2_2" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating2_2" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Command over the medium of instruction(language) / communication skills
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating3_2" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating3_2" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p> <input type="radio" name="rating3_2" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating3_2" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating3_2" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating3_2" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating3_2" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Clarity in approach / thinking.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating4_2" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating4_2" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating4_2" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating4_2" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating4_2" value="5" />&nbsp; Good&nbsp;</p>
                                            <p> <input type="radio" name="rating4_2" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating4_2" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Punctuality and regularity in taking lectures and practicals.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating5_2" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating5_2" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating5_2" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating5_2" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating5_2" value="5" />&nbsp; Good&nbsp;</p>
                                            <p> <input type="radio" name="rating5_2" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating5_2" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Proficiency in handling online classroom platforms.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating6_2" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating6_2" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p> <input type="radio" name="rating6_2" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating6_2" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating6_2" value="5" />&nbsp; Good&nbsp;</p>
                                            <p> <input type="radio" name="rating6_2" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating6_2" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Time management skill \ skill of completing the syllabus with doubt solving
                                        sessions
                                        in time.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating7_2" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating7_2" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating7_2" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating7_2" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating7_2" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating7_2" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating7_2" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                            <br />
                            <li>
                                Additional peripheral skills / activities.
                                <br />
                                <br />
                                <ul>
                                    <li>
                                        Use of case studies, illustration, current events, anecdotes in teaching.ommand
                                        over the subject.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating1_3" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_3" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating1_3" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating1_3" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating1_3" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating1_3" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating1_3" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Use of interactive teaching - seminars, tutorials, quizzes, assignments etc.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating2_3" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating2_3" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating2_3" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating2_3" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating2_3" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating2_3" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating2_3" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Command over the medium of instruction(language) / communication skills
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating3_3" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating3_3" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating3_3" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating3_3" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating3_3" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating3_3" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating3_3" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Giving references for further reading.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating4_3" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating4_3" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating4_3" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating4_3" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating4_3" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating4_3" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating4_3" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Conducting evaluation by periodic tests / questions answer sessions or by
                                        designing
                                        quizzes / tests / assignments / examinations and projects to evaluate students.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating5_3" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating5_3" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating5_3" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating5_3" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating5_3" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating5_3" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating5_3" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Encouraging students to apply in real life whatever they have learnt in
                                        classrooms.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating6_3" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating6_3" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating6_3" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating6_3" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating6_3" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating6_3" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating6_3" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Counselling : Career / placement / personal.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating7_3" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating7_3" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating7_3" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating7_3" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating7_3" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating7_3" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating7_3" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                    <li>
                                        Stimulating a sense of social responsibility.
                                        <br />
                                        <br />
                                        <span class="radio">
                                            <p><input type="radio" name="rating8_3" value="1" />&nbsp;
                                                Very-Poor&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating8_3" value="2" />&nbsp; Poor&nbsp;</p>
                                            <p><input type="radio" name="rating8_3" value="3" />&nbsp;
                                                Below-Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating8_3" value="4" />&nbsp; Average&nbsp;
                                            </p>
                                            <p> <input type="radio" name="rating8_3" value="5" />&nbsp; Good&nbsp;</p>
                                            <p><input type="radio" name="rating8_3" value="6" />&nbsp;
                                                Very-Good&nbsp;
                                            </p>
                                            <p><input type="radio" name="rating8_3" value="7" />&nbsp;
                                                Excellent&nbsp;
                                            </p>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                        <br />
                        <div class="form__div">
                            <input type="text" class="form__input" name="suggest" id="suggest"
                                placeholder="Your Suggessions" autocomplete="off" />
                            <label for="" class="form__label">Suggestions</label>
                        </div>
                        <br />
                        <input type="submit" id="sub" class="form__button font-mono" value="Submit" name="submit"
                            style="float: right;" />
                    </div>
                </fieldset>
            </form>
        </div>
        <br />
    </div>
    <br>
    <div class="footer-copyright text-center" style="position:relative">
        <br />
        <p style="padding:1rem;">
            &copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_self"
                class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> |
            <a href="../../../personal.html" class="text-[blue] hover:underline">Contributors</a>
            <br />
        </p>
    </div>
</body>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- form validation -->
<script type="text/javascript" src="../../../Js/papto.js?v=1"></script>
<script src="../../../Js/main.js?v=1" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>

</html>