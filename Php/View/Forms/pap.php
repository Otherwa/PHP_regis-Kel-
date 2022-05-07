<?php
include('../connect.php');

//on click
session_start();

if (!isset($_SESSION['setPAP'])) {
    // redirect if not set
    header('Location: forms.php');
}

$con = get_con();
$sqlquery_get_tech = "SELECT Name FROM `form_fillup`";
$result = mysqli_query($con, $sqlquery_get_tech);
while ($r = mysqli_fetch_assoc($result)) {
    // echo $r['Name'] . " ";
}

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


    $name = $_POST['name'];
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];
    $division = $_POST['division'];
    $semester = $_POST['semester'];
    $teacher = $_POST['teacher'];
    $rating_1 = $_POST['rating_1'];
    $rating_2 = $_POST['rating_2'];
    $rating_3 = $_POST['rating_3'];
    $paper;
    if ($semester == "I") {
        $paper = $_POST['paper1'];
    } else if ($semester == "II") {
        $paper = $_POST['paper2'];
    } else if ($semester == "III") {
        $paper = $_POST['paper3'];
    } else if ($semester == "IV") {
        $paper = $_POST['paper4'];
    } else if ($semester == "V") {
        $paper = $_POST['paper5'];
    } else if ($semester == "VI") {
        $paper = $_POST['paper6'];
    } else {
        echo "<script>alert('WTF')script>";
    }
    // session name
    $_SESSION['name'] = $name;
    if ($name == 'Atharv') {
        header('Location: formsubmit.php');
    }

    // echo $name . " " . $class . " " . $rollno . " " . $division . " " . $semester . " " . $paper . " " . $teacher . " " . $rating_1 . " " . $rating_2 . " " . $rating_3;
}
// INSERT INTO `form_fillup` (`Id`, `Name`, `Review`, `Day`) VALUES ('1', 'Atharv', 'NICE', DAYNAME(CURDATE()));

?>


<!DOCTYPE html>
<html>

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
</head>

<body class="p-0 m-0">
    <ul class="sidenav">
        <!-- to destroy session -->
        <li><a class="font-mono" href="forms.php" target="_self">Back</a></li>
    </ul>
    <br />
    <br />
    <div class="bg-[#ffffff] text-center content" style="padding:1rem">
        <!-- darkmode toggle -->
        <br />
        <div class="l-form">
            <form action="#" method="POST" class="form">
                <fieldset>
                    <code style="color: red;">Still in Production</code>
                    <legend>Yare Yare Daze</legend>
                    <h1 class="form__title"
                        style="font-family: 'Bungee', cursive; font-size: 2.2rem; color: rgb(119, 195, 196);">
                        <span style="text-decoration: underline;">PAT's Question</span><br />
                        <span style="font-size: 1.4rem; font-family: 'Roboto', sans-serif; color: black;">
                            <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                                style="height: 3rem; margin-top: 1rem;" />
                        </span>
                    </h1>
                    <div class="form__div">
                        <input type="text" class="form__input" name="name" id="name" placeholder="e.g xyz"
                            autocomplete="off" />
                        <label for="" class="form__label">Name</label>
                    </div>
                    <div class="form__div">
                        <input type="text" class="form__input" name="rollno" id="rollno" placeholder="e.g 3844A004"
                            autocomplete="off" />
                        <label for="" class="form__label">Roll no?</label>
                    </div>
                    <!-- selected opts -->
                    <div class="form__div selectaltered">
                        <label for="class" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Class:</label>
                        <select name="class" id="class">
                            <option value="FYBsc-IT" selected>FYBsc-IT</option>
                            <option value="SYBsc-IT">SYBsc-IT</option>
                            <option value="TYBsc-IT">TYBsc-IT</option>
                        </select>
                    </div>
                    <div class="form__div selectaltered">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Division:</label>
                        <select name="division" id="divison">
                            <option value="A" selected>A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="form__div selectaltered">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose
                            Semester:</label>
                        <select name="semester" id="semester" onchange="selectedsemester()">
                            <option value="" selected>----</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                        </select>
                    </div>
                    <!-- paper selection -->
                    <div class="form__div selectaltered" id="semester1_paper" style="display: none;">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose Sem I
                            Subject:</label>
                        <select name="paper1">
                            <option value="Imperative Programming">Imperative Programming</option>
                            <option value="Digital Electronics">Digital Electronics</option>
                            <option value="Operating Systems">Operating Systems</option>
                            <option value="Discrete Mathematics">Discrete Mathematics</option>
                            <option value="Communication Skills">Communication Skills</option>
                            >
                        </select>
                    </div>
                    <div class="form__div selectaltered" id="semester2_paper" style="display: none;">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose Sem II
                            Subject:</label>
                        <select name="paper2">
                            <option value="Object Oriented Programming">Object Oriented Programming</option>
                            <option value="Microprocessor Architecture">Microprocessor Architecture</option>
                            <option value="Web Programming">Web Programming</option>
                            <option value="Numerical and Statistical Methods">Numerical and Statistical Methods</option>
                            <option value="Green Computing">Green Computing</option>
                        </select>
                    </div>
                    <div class="form__div selectaltered" id="semester3_paper" style="display: none;">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose Sem III
                            Subject:</label>
                        <select name="paper3">
                            <option value="Python Programming">Python Programming</option>
                            <option value="Data Structures">Data Structures</option>
                            <option value="Computer Networks">Computer Networks</option>
                            <option value="Database Management SystemsIV">Database Management Systems</option>
                            <option value="Applied Mathematics">Applied Mathematics</option>
                        </select>
                    </div>
                    <div class="form__div selectaltered" id="semester4_paper" style="display: none;">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose Sem IV
                            Subject:</label>
                        <select name="paper4">
                            <option value="Core Java">Core Java</option>
                            <option value="Introduction to Embedded Systems">Introduction to Embedded Systems</option>
                            <option value="Computer Oriented Statistical Techniques">Computer Oriented Statistical
                                Techniques</option>
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="Computer Graphics and Animation">Computer Graphics and Animation</option>
                        </select>
                    </div>
                    <div class="form__div selectaltered" id="semester5_paper" style="display: none;">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose Sem V
                            Subject:</label>
                        <select name="paper5">
                            <option value="Software Project Management">Software Project Management</option>
                            <option value="Internet of Things">Internet of Things</option>
                            <option value="Advanced Web Programming">Advanced Web ProgrammingIII</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Next Generation TechnologiesV">Next Generation Technologies</option>
                        </select>
                    </div>
                    <div class="form__div selectaltered" id="semester6_paper" style="display: none;">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Choose Sem VI
                            Subject:</label>
                        <select name="paper6">
                            <option value="Software Quality Assurance">Software Quality Assurance</option>
                            <option value="Security in Computing">Security in Computing</option>
                            <option value="Business Intelligence">Business Intelligence</option>
                            <option value="Principles of Geographic Information Systems">Principles of Geographic
                                Information Systems</option>
                            <option value="Cyber Laws">Cyber Laws</option>
                        </select>
                    </div>
                    <!-- selected opts -->
                    <br />
                    <div class="form__div selectaltered" id="teacher">
                        <label for="division" class="text-sm" style="color: rgb(68, 74, 79);">&bull; Teacher
                            Name:</label>
                        <select name="teacher">
                            <option value="Mr's Pournima Bhangal">Mr's Pournima Bhangale</option>
                            <option value="Mr's Vandana Kadam">Mr's Vandana Kadam</option>
                            <option value="Mr's Rakhee Rane">Mr's Rakhee Rane</option>
                            <option value="Mr's Nanda Rupnar">Mr's Nanda Rupnar</option>
                            <option value="Mr's Mohini Bhole">Mr's Mohini Bhole</option>
                            <option value="Mr's Pranali Pawar">Mr's Pranali Pawar</option>
                        </select>
                    </div>
                    <!-- all query  -->
                    <br />
                    <br />
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
                                        <input type="radio" name="rating1_1" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating1_1" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating1_1" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating1_1"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating1_1" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating1_1" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating1_1" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Readiness to resolve student's doubts and general availability / accessibility to
                                    students.Positive and motivating attitude towards students.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating2_1" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating2_1" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating2_1" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating2_1"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating2_1" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating2_1" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating2_1" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Worked hard to create a feeling of belongingness in a classroom without walls.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating3_1" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating3_1" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating3_1" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating3_1"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating3_1" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating3_1" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating3_1" value="Excellent" />&nbsp; Excellent&nbsp;
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
                                        <input type="radio" name="rating1_2" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating1_2" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating1_2" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating1_2"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating1_2" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating1_2" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating1_2" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Skills in making the subject interesting.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating2_2" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating2_2" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating2_2" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating2_2"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating2_2" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating2_2" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating2_2" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Command over the medium of instruction(language) / communication skills
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating3_2" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating3_2" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating3_2" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating3_2"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating3_2" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating3_2" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating3_2" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Clarity in approach / thinking.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating4_2" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating4_2" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating4_2" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating4_2"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating4_2" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating4_2" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating4_2" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Punctuality and regularity in taking lectures and practicals.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating5_2" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating5_2" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating5_2" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating5_2"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating5_2" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating5_2" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating5_2" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Proficiency in handling online classroom platforms.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating6_2" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating6_2" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating6_2" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating6_2"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating6_2" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating6_2" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating6_2" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Time management skill \ skill of completing the syllabus with doubt solving sessions
                                    in time.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating7_2" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating7_2" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating7_2" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating7_2"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating7_2" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating7_2" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating7_2" value="Excellent" />&nbsp; Excellent&nbsp;
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
                                    CUse of case studies, illustration, current events, anecdotes in teaching.ommand
                                    over the subject.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating1_3" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating1_3" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating1_3" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating1_3"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating1_3" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating1_3" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating1_3" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Use of interactive teaching - seminars, tutorials, quizzes, assignments etc.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating2_3" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating2_3" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating2_3" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating2_3"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating2_3" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating2_3" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating2_3" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Command over the medium of instruction(language) / communication skills
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating3_3" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating3_3" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating3_3" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating3_3"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating3_3" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating3_3" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating3_3" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Giving references for further reading.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating4_3" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating4_3" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating4_3" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating4_3"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating4_3" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating4_3" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating4_3" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Conducting evaluation by periodic tests / questions answer sessions or by designing
                                    quizzes / tests / assignments / examinations and projects to evaluate students.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating5_3" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating5_3" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating5_3" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating5_3"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating5_3" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating5_3" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating5_3" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Encouraging students to apply in real life whatever they have learnt in classrooms.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating6_3" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating6_3" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating6_3" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating6_3"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating6_3" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating6_3" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating6_3" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Counselling : Career / placement / personal.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating7_3" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating7_3" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating7_3" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating7_3"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating7_3" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating7_3" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating7_3" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                                <li>
                                    Stimulating a sense of social responsibility.
                                    <br />
                                    <br />
                                    <span class="radio">
                                        <input type="radio" name="rating8_3" value="VeryPoor" />&nbsp; Very-Poor&nbsp;
                                        <input type="radio" name="rating8_3" value="Poor" />&nbsp; Poor&nbsp;
                                        <input type="radio" name="rating8_3" value="BelowAverage" />&nbsp;
                                        Below-Average&nbsp; <input type="radio" name="rating8_3"
                                            value="Average" />&nbsp; Average&nbsp;
                                        <input type="radio" name="rating8_3" value="Good" />&nbsp; Good&nbsp; <input
                                            type="radio" name="rating8_3" vlaue="VeryGood" />&nbsp; Very-Good&nbsp;
                                        <input type="radio" name="rating8_3" value="Excellent" />&nbsp; Excellent&nbsp;
                                    </span>
                                </li>
                            </ul>
                        </li>
                    </ol>
                    <br />
                    <br />
                    <input type="submit" id="sub" class="form__button font-mono" value="Submit" name="submit"
                        style="float: right;" />
                </fieldset>
            </form>
        </div>
        <br />

        <div class="footer-copyright text-center">
            <br />
            <p style="padding: 1rem;">
                &copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_self"
                    class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> |
                <a href="../../../personal.html" class="text-[blue] hover:underline">Contact</a>
                <br />
            </p>
        </div>
    </div>
</body>

<!-- form validation -->
<script type="text/javascript" src="../../../Js/papto.js"></script>

</html>