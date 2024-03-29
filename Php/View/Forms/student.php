<?php
ob_start();
include('../connect.php');
//on click
session_start();
if (!isset($_SESSION['setStu'])) {
    header('Location: forms.php');
}

// establish connection
$con = get_con();

if (isset($_POST['submit'])) {

    //session statuses
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

    // default confirm setStu
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $rollno = mysqli_real_escape_string($con, $_POST['rollno']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $programme = mysqli_real_escape_string($con, $_POST['programme']);
    $division = mysqli_real_escape_string($con, $_POST['division']);
    if (isset($name) && isset($age) && isset($gender) && isset($rollno) && isset($class) && isset($programme) && isset($division)) {


        if ($name == '--' || $age == '--' || $gender == '--' || $rollno == '--' || $class == '--' || $programme == '--' || $division == '--') {
            echo "<script>alert('Kindly Check Your Form Once Again 🤓');</script>";
        } else {
            //ratings
            getandset_ratings($con, $name, $age, $gender, $rollno, $class, $programme, $division);
        }
    } else {
        echo "<script>alert('Something Wrong with Your Form 🤓');</script>";
    }
}

function getandset_ratings($con, $name, $age, $gender, $rollno, $class, $programme, $division)
{



    if (isset($_POST['rating_1']) && isset($_POST['rating_2'])  && isset($_POST['rating_3'])  && isset($_POST['rating_4'])  && isset($_POST['rating_5'])  && isset($_POST['rating_6'])  && isset($_POST['rating_7'])  && isset($_POST['rating_8'])  && isset($_POST['rating_9'])  && isset($_POST['rating_10'])  && isset($_POST['rating_11'])  && isset($_POST['rating_12'])  && isset($_POST['rating_13'])  && isset($_POST['rating_14'])  && isset($_POST['rating_15'])  && isset($_POST['rating_16'])  && isset($_POST['rating_17'])) {
        // 
        $rating_1 = $_POST['rating_1'];
        $rating_2 = $_POST['rating_2'];
        $rating_3 = $_POST['rating_3'];
        $rating_4 = $_POST['rating_4'];
        $rating_5 = $_POST['rating_5'];
        $rating_6 = $_POST['rating_6'];
        $rating_7 = $_POST['rating_7'];
        $rating_8 = $_POST['rating_8'];
        $rating_9 = $_POST['rating_9'];
        $rating_10 = $_POST['rating_10'];
        $rating_11 = $_POST['rating_11'];
        $rating_12 = $_POST['rating_12'];
        $rating_13 = $_POST['rating_13'];
        $rating_14 = $_POST['rating_14'];
        $rating_15 = $_POST['rating_15'];
        $rating_16 = $_POST['rating_16'];
        $rating_17 = $_POST['rating_17'];

        // dead code ahead scared to remove [block start]
        // if form already exisits if roll no primary considered case (roll programme class) in database
        $query = "SELECT `rollno` FROM `answersss` WHERE rollno = '$rollno';";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Your submitted Form already exists 🤡');</script>";
            //[block end]
        } else {
            $query = "INSERT INTO `answersss`(`name`, `age`, `gender`, `rollno`, `class`, `programme`, `division`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `a23`, `a24`, `a25`, `a26`, `a27`, `time`)
                VALUES ('$name','$age','$gender','$rollno','$class','$programme','$division','$rating_1','$rating_2','$rating_3','$rating_4','$rating_5','$rating_6','$rating_7','$rating_8','$rating_9','$rating_10','$rating_11','$rating_12','$rating_13','$rating_14','$rating_15','$rating_16','$rating_17',current_timestamp());";
            mysqli_query($con, $query);
            $_SESSION['name'] = $name;
            header('Location: formsubmit.php');
            // close connection
            mysqli_close($con);
        }
    } else {
        echo "<script>alert('Please select all the fields given below 🤓');</script>";
        // close connection
        mysqli_close($con);
    }
}
ob_end_flush();
?>

<!-- fields for form -->
<?php
$lab = array(
    'Availability of extra-curricular activities in college.',
    'Amenities and assistance available for extra-curricular activities at the college.',
    'Sports facility in college.',
    'Canteen facility in college(Food quality).',
    'Canteen facility in college(Rates of the food items).',
    'Canteen facility in college(Attitude and service received).',
    'Cleanliness and maintenance in the classrooms.',
    'Cleanliness and maintenance of Toilets/washrooms.',
    'Timely redressal of grievances/problems of students.',
    'Functioning of the Placement Cell.',
    'Library facility in college(Availability of prescribed books/reading materials.).',
    'Library facility in college(Way of cataloguing and arrangement of books in the library).',
    ' Library facility in college(Availability and accessibility of online educational resources in college.).',
    'Library facility in college(Attitude of Library staff).',
    'College Website.',
    'Fairness and feedback mechanism in the Internal Continuous Assessment (ICA).',
    'Mentoring system.',
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Satisfaction Survey</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css -->
    <!-- <script src="https://cdn.tailwindcss.com"></script>  -->
    <link rel="stylesheet" type="text/css" href="../../../dist/output.css" />
    <link rel="stylesheet" type="text/css" href="../../../Css/style.css" />
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
    <!-- num style -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type="number"] {
        -moz-appearance: textfield;
    }

    p {
        font-family: monospace;
    }
    </style>
</head>

<body class="p-0 m-0">
    <div class="bg-[#ffffff] text-center" style="padding:0.5rem">
        <div class="l-form p-0 ">
            <form method="POST" id="subcard" class="form">
                <fieldset>
                    <legend>
                        <h1 class="font-mono antialiased text-lg">Fill up</h1>
                    </legend>
                    <h1 class=" form__title"
                        style="font-family: 'Bungee', cursive; font-size: 2.2rem; color: rgb(119, 195, 196);">
                        <span style="text-decoration:underline;font-size: 1.45rem;">Student Satisfaction Survey</span>
                        <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                            style="height:3rem;margin-top:1rem">
                        <p style=" font-size: 1rem; font-family: 'Roboto' , sans-serif; color: black;margin-top:10px">
                            <code class="msg">Student Satisfaction Survey will help upgrade the quality in higher education.
                                A student will have to respond to all the questions given in the following format with her/his
                                sincere effort and thought.
                            </code>
                        </p>
                        </span>
                    </h1>

                    <br />

                    <div class="form__div">
                        <input type="number" class="form__input" name="rollno" id="rollno" placeholder="e.g XXXXXXX289"
                            autocomplete="off" onInput="verify_stu()" />
                        <label for="" class="form__label">Control Id</label>
                    </div>
                    <p id="notvalid_roll"></p>
                    <!-- ajax ctrlid verify -->
                    <!-- bug -->

                    <div class="form__div">
                        <input type="text" class="form__input" name="name" id="name" placeholder="Full Name"
                            autocomplete="off" readonly />
                        <label for="" class="form__label">Name?</label>
                    </div>

                    <div class="form__div">
                        <input type="number" class="form__input" name="age" id="age" placeholder="e.g 18"
                            autocomplete="off" />
                        <label for="" class="form__label">Age?</label>
                    </div>

                    <div class="form__div selectaltered">
                        <label for="gender" class="text-sm" style="color:rgb(68, 74, 79)">&squarf; Gender:</label>
                        <select name="gender" id="gender">
                            <option value="--">--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <!-- can be acquired by database activectrlid-->
                    <div class="form__div selectaltered">
                        <label for="class" class="text-sm" style="color:rgb(68, 74, 79)">&squarf; Class:</label>
                        <select name="class" id="class" onchange="Get_Programme()">
                            <option value=" ">--</option>
                            <!-- ajax get -->
                        </select>
                    </div>

                    <div class="form__div selectaltered">
                        <label for="programme" class="text-sm" style="color:rgb(68, 74, 79)">&squarf;
                            Programme:</label>
                        <select name="programme" id="programme" onchange="Is_Form_Sent()">
                            <option value=" ">--</option>
                            <!-- ajax get -->
                        </select>
                    </div>

                    <div class="form__div selectaltered">
                        <label for="division" class="text-sm" style="color:rgb(68, 74, 79)">&bull; Division:</label>
                        <select name="division" id="divison">
                            <option value="A" selected>A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>

                    <br />
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
                    <br />

                    <!-- selected opts -->
                    <div id="msg_set" style="display:none">
                        <ol class="form-ol">
                            <li>
                                <?php echo $lab[0]; ?>
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_1" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_1" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_1" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_1" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_1" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_1" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_1" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[1]; ?>
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_2" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_2" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_2" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_2" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_2" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_2" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_2" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[2]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_3" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_3" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_3" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_3" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_3" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_3" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_3" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[3]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_4" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_4" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_4" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_4" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_4" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_4" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_4" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[4]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_5" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_5" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_5" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_5" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_5" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_5" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_5" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[5]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_6" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_6" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_6" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_6" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_6" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_6" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_6" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[6]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_7" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_7" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_7" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_7" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_7" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_7" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_7" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[7]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_8" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_8" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_8" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_8" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_8" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_8" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_8" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[8]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_9" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_9" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_9" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_9" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_9" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_9" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_9" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[9]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_10" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_10" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_10" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_10" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_10" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_10" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_10" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>


                            <br />

                            <li>
                                <?php echo $lab[10]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_11" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_11" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_11" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_11" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_11" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_11" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_11" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[11]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_12" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_12" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_12" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_12" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_12" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_12" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_12" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[12]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_13" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_13" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_13" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_13" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_13" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_13" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_13" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[13]; ?>:
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_14" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_14" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_14" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_14" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_14" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_14" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_14" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[14]; ?>
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_15" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_15" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_15" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_15" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_15" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_15" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_15" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[15]; ?>
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_16" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_16" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_16" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_16" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_16" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_16" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_16" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>

                            <br />

                            <li>
                                <?php echo $lab[16]; ?>
                                <br />
                                <br />
                                <span class="radio">
                                    <p><input type="radio" name="rating_17" value="1">&nbsp; Very-Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_17" value="2">&nbsp; Poor&nbsp;</p>
                                    <p><input type="radio" name="rating_17" value="3">&nbsp; Below-Average&nbsp;
                                    </p>
                                    <p><input type="radio" name="rating_17" value="4">&nbsp; Average&nbsp;</p>
                                    <p><input type="radio" name="rating_17" value="5">&nbsp; Good&nbsp;</p>
                                    <p><input type="radio" name="rating_17" value="6">&nbsp; Very-Good&nbsp;</p>
                                    <p><input type="radio" name="rating_17" value="7">&nbsp; Excellent&nbsp;</p>
                                </span>
                            </li>
                        </ol>
                        <!-- all query  -->



                        <br />
                        <br />
                        <input type="submit" id="sub" class="form__button font-mono" value="Submit" name="submit"
                            style="float: right;" />
                    </div>
                </fieldset>
            </form>

        </div>

    </div>
    <br>
    <div class="footer-copyright text-center" style="position:relative">
        <br />
        <p style="padding:1rem">&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html"
                target="_self" class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                href="../../../personal.html" class="text-[blue] hover:underline ">Contributors</a>
            <br>
    </div>
</body>

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- form validation -->
<script type="text/javascript" src="../../../Js/student.js?v=1"></script>
<script src="../../../Js/main.js?v=1" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>

</html>