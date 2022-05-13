<?php
include('../connect.php');
//on click
session_start();
if (!isset($_SESSION['setStu'])) {
    header('Location: forms.php');
}


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

    $confirm = $_POST['confirm'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $rollno = $_POST['rollno'];
    $class = $_POST['class'];
    $programme = $_POST['programme'];
    $division = $_POST['division'];
    // ratings
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


    echo $confirm . " " . $name . " " . $age . " " . $gender . " " . $rollno . " " . $class . " " . $programme . " " . $division . "\n";
    echo $rating_1 . " " . $rating_2 . " " . $rating_3 . " " . $rating_4 . " " . $rating_5 . " " . $rating_6 . " " . $rating_7 . " " . $rating_8 . " " . $rating_9 . " " . $rating_10 . " " . $rating_11 . " " . $rating_12 . " " . $rating_13 . " " . $rating_14 . " " . $rating_15 . " " . $rating_16 . " " . $rating_17;
    // INSERT INTO `form_fillup` (`Id`, `Name`, `Review`, `Day`) VALUES ('1', 'Atharv', 'NICE', DAYNAME(CURDATE()));
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Student Satisfaction Survey</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    </style>
</head>

<body class="p-0 m-0">
    <ul class="sidenav">
        <!-- to destroy session -->
        <li style="padding-bottom:0px"><a class="font-mono" href="forms.php" target="_self">Back</a></li>
    </ul>
    <br />
    <br />
    <div class="bg-[#ffffff] text-center content" style="padding:0.5rem">

        <div class="l-form p-0 ">
            <form method="POST" class="form">
                <fieldset>
                    <code style="color:red">Still in Production</code>
                    <legend>Yare Yare Daze</legend>

                    <h1 class=" form__title"
                        style="font-family: 'Bungee', cursive; font-size: 2.2rem; color: rgb(119, 195, 196);">
                        <span style="text-decoration:underline">Student Satisfaction Survey</span>
                        <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                            style="height:3rem;margin-top:1rem">
                        <p style=" font-size: 1rem; font-family: 'Roboto' , sans-serif; color: black;margin-top:10px">
                            <code> Student
                                Satisfaction Survey will help upgrade the quality in higher education.
                                A student will have to respond to all the questions given in the following format with her/his
                                sincere effort and thought.
                            </code>
                        </p>
                        </span>
                    </h1>

                    <div class="form_div">
                        <p>Please confirm this is the first and only time you answer this survey. </p>
                        <br />
                        <ul style="display:grid">
                            <li>
                                <p style="font-weight:bold;font-family:monospace;color:#006effb7;">Yes&nbsp;<input
                                        type="radio" name="confirm" value="yes"></p>
                            </li>
                            <li>
                                <p style="font-weight:bold;font-family:monospace;color:#FF0000B7;">No&nbsp;<input
                                        type="radio" name="confirm" value="no"></p>
                            </li>
                        </ul>
                    </div>
                    <br />

                    <div class="form__div">
                        <input type="text" class="form__input" name="name" id="name" placeholder="e.g xyz"
                            autocomplete="off" />
                        <label for="" class="form__label">Name?</label>
                    </div>

                    <div class="form__div">
                        <input type="number" class="form__input" name="age" id="age" placeholder="e.g 19"
                            autocomplete="off" />
                        <label for="" class="form__label">Age?</label>
                    </div>

                    <div class="form__div selectaltered">
                        <label for="gender" class="text-sm" style="color:rgb(68, 74, 79)">&squarf; Gender:</label>
                        <select name="gender" id="gender">
                            <option value="Default">--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <br />

                    <div class="form__div">
                        <input type="text" class="form__input" name="rollno" id="rollno"
                            placeholder="e.g Use 2020080289 for verify_student" autocomplete="off"
                            onInput="verify_stu()" />
                        <label for="" class="form__label">Control Id</label>
                    </div>
                    <p id="notvalid_roll"></p>
                    <!-- ajax ctrlid verify -->

                    <input type="hidden" id="msg">
                    <!-- bug -->
                    <br>
                    <div class="form__div selectaltered">
                        <label for="class" class="text-sm" style="color:rgb(68, 74, 79)">&squarf; Class:</label>
                        <select name="class" id="class">
                            <option value=" ">--</option>
                            <option value="FY">FY</option>
                            <option value="SY">SY</option>
                            <option value="TY">TY</option>
                            <option value="MSc">Msc</option>
                            <option value="MSc-IT">Msc-IT</option>
                            <option value="MSc-BT">Msc-BT</option>
                            <option value="PGDPCM">PGDPCM</option>
                        </select>
                    </div>

                    <div class="form__div selectaltered">
                        <label for="programme" class="text-sm" style="color:rgb(68, 74, 79)">&squarf; Programme:</label>
                        <select name="programme" id="programme">
                            <option value=" ">--</option>
                            <option value="BA">BA</option>
                            <option value="BSc">Bsc</option>
                            <option value="BCom">BCom</option>
                            <option value="BSc-IT">BSc-IT</option>
                            <option value="BBI">BBI</option>
                            <option value="BAMMC">BAMMC</option>
                            <option value="BMC">BMC</option>
                            <option value="BAF">BAF</option>
                            <option value="BVoc">BVoc</option>
                            <option value="Part-I">Part-I</option>
                            <option value="Part-II">Part-II</option>
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

                    <p class="text-lg hover:underline"><code>Instructions to fill the questionnaire</code></p>
                    <br />
                    <ul>
                        <li style="color:red;font-weight:bold;font-family:monospace;">All questions should be
                            compulsorily attempted. *</li>
                        <li style="color:red;font-weight:bold;font-family:monospace;">Each question has seven responses,
                            choose the most appropriate one. *</li>
                    </ul>
                    <br />

                    <!-- selected opts -->

                    <ol class="form-ol" id="msg_set">
                        <li>
                            Availability of extra-curricular activities in college:
                            <br />
                            <br />
                            <span class="radio">
                                <p><input type="radio" name="rating_1" value="VeryPoor">&nbsp; Very-Poor&nbsp;</p>
                                <p><input type="radio" name="rating_1" value="Poor">&nbsp; Poor&nbsp;</p>
                                <p><input type="radio" name="rating_1" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                </p>
                                <p><input type="radio" name="rating_1" value="Average">&nbsp; Average&nbsp;</p>
                                <p><input type="radio" name="rating_1" value="Good">&nbsp; Good&nbsp;</p>
                                <p><input type="radio" name="rating_1" vlaue="VeryGood">&nbsp; Very-Good&nbsp;</p>
                                <p><input type="radio" name="rating_1" value="Excellent">&nbsp; Excellent&nbsp;</p>
                            </span>
                        </li>

                        <br />

                        <li>
                            Amenities and assistance available for extra-curricular activities at the college:
                            <br />
                            <br />
                            <span class="radio">
                                <p><input type="radio" name="rating_2" value="VeryPoor">&nbsp; Very-Poor&nbsp;</p>
                                <p><input type="radio" name="rating_2" value="Poor">&nbsp; Poor&nbsp;</p>
                                <p><input type="radio" name="rating_2" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                </p>
                                <p><input type="radio" name="rating_2" value="Average">&nbsp; Average&nbsp;</p>
                                <p><input type="radio" name="rating_2" value="Good">&nbsp; Good&nbsp;</p>
                                <p> <input type="radio" name="rating_2" vlaue="VeryGood">&nbsp; Very-Good&nbsp;</p>
                                <p> <input type="radio" name="rating_2" value="Excellent">&nbsp; Excellent&nbsp;</p>
                            </span>
                        </li>

                        <br />

                        <li>
                            Sports facility in college:
                            <br />
                            <br />
                            <span class="radio">
                                <p> <input type="radio" name="rating_3" value="VeryPoor">&nbsp; Very-Poor&nbsp;</p>
                                <p> <input type="radio" name="rating_3" value="Poor">&nbsp; Poor&nbsp;</p>
                                <p> <input type="radio" name="rating_3" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                </p>
                                <p> <input type="radio" name="rating_3" value="Average">&nbsp; Average&nbsp;</p>
                                <p> <input type="radio" name="rating_3" value="Good">&nbsp; Good&nbsp;</p>
                                <p> <input type="radio" name="rating_3" vlaue="VeryGood">&nbsp; Very-Good&nbsp;</p>
                                <p> <input type="radio" name="rating_3" value="Excellent">&nbsp; Excellent&nbsp;</p>
                            </span>
                        </li>

                        <br />

                        <li>
                            Canteen facility in college(Food quality):
                            <br />
                            <br />
                            <span class="radio">
                                <p> <input type="radio" name="rating_4" value="VeryPoor">&nbsp; Very-Poor&nbsp;</p>
                                <p> <input type="radio" name="rating_4" value="Poor">&nbsp; Poor&nbsp;</p>
                                <p> <input type="radio" name="rating_4" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                </p>
                                <p> <input type="radio" name="rating_4" value="Average">&nbsp; Average&nbsp;</p>
                                <p> <input type="radio" name="rating_4" value="Good">&nbsp; Good&nbsp;</p>
                                <p> <input type="radio" name="rating_4" vlaue="VeryGood">&nbsp; Very-Good&nbsp;</p>
                                <p> <input type="radio" name="rating_4" value="Excellent">&nbsp; Excellent&nbsp;</p>
                            </span>
                        </li>

                        <br />

                        <li>
                            Canteen facility in college(Rates of the food items):
                            <br />
                            <br />
                            <span class="radio">
                                <p> <input type="radio" name="rating_5" value="VeryPoor">&nbsp; Very-Poor&nbsp;</p>
                                <p> <input type="radio" name="rating_5" value="Poor">&nbsp; Poor&nbsp;</p>
                                <p> <input type="radio" name="rating_5" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                </p>
                                <p> <input type="radio" name="rating_5" value="Average">&nbsp; Average&nbsp;</p>
                                <p> <input type="radio" name="rating_5" value="Good">&nbsp; Good&nbsp;</p>
                                <p> <input type="radio" name="rating_5" vlaue="VeryGood">&nbsp; Very-Good&nbsp;</p>
                                <p> <input type="radio" name="rating_5" value="Excellent">&nbsp; Excellent&nbsp;</p>
                            </span>
                        </li>

                        <br />

                        <li>
                            Canteen facility in college(Attitude and service received):
                            <br />
                            <br />
                            <span class="radio">
                                <p> <input type="radio" name="rating_6" value="VeryPoor">&nbsp; Very-Poor&nbsp;</p>
                                <p> <input type="radio" name="rating_6" value="Poor">&nbsp; Poor&nbsp;</p>
                                <p> <input type="radio" name="rating_6" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                </p>
                                <p> <input type="radio" name="rating_6" value="Average">&nbsp; Average&nbsp;</p>
                                <p> <input type="radio" name="rating_6" value="Good">&nbsp; Good&nbsp;</p>
                                <p> <input type="radio" name="rating_6" vlaue="VeryGood">&nbsp; Very-Good&nbsp;</p>
                                <p> <input type="radio" name="rating_6" value="Excellent">&nbsp; Excellent&nbsp;</p>
                            </span>
                        </li>

                        <br />

                        <li>
                            Cleanliness and maintenance in the classrooms:
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_7" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_7" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_7" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_7" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_7" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_7" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_7" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Cleanliness and maintenance of Toilets/washrooms:
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_8" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_8" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_8" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_8" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_8" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_8" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_8" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Timely redressal of grievances/problems of students:
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_9" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_9" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_9" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_9" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_9" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_9" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_9" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Functioning of the Placement Cell:
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_10" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_10" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_10" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_10" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_10" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_10" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_10" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>


                        <br />

                        <li>
                            Library facility in college(Availability of prescribed books/reading materials.):
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_11" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_11" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_11" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_11" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_11" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_11" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_11" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Library facility in college(Way of cataloguing and arrangement of books in the library):
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_12" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_12" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_12" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_12" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_12" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_12" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_12" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Library facility in college(Availability and accessibility of online educational resources
                            in
                            college.):
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_13" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_13" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_13" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_13" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_13" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_13" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_13" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Library facility in college(Attitude of Library staff):
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_14" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_14" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_14" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_14" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_14" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_14" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_14" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            College Website:
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_15" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_15" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_15" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_15" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_15" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_15" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_15" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Fairness and feedback mechanism in the Internal Continuous Assessment (ICA):
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_16" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_16" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_16" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_16" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_16" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_16" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_16" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Mentoring system:
                            <br />
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating_17" value="VeryPoor">&nbsp; Very-Poor&nbsp;
                                <input type="radio" name="rating_17" value="Poor">&nbsp; Poor&nbsp;
                                <input type="radio" name="rating_17" value="BelowAverage">&nbsp; Below-Average&nbsp;
                                <input type="radio" name="rating_17" value="Average">&nbsp; Average&nbsp;
                                <input type="radio" name="rating_17" value="Good">&nbsp; Good&nbsp;
                                <input type="radio" name="rating_17" vlaue="VeryGood">&nbsp; Very-Good&nbsp;
                                <input type="radio" name="rating_17" value="Excellent">&nbsp; Excellent&nbsp;
                            </span>
                        </li>
                    </ol>
                    <!-- all query  -->



                    <br />
                    <br />
                    <input type="submit" id="sub" class="form__button font-mono" value="Submit" name="submit"
                        style="float: right;" />
                </fieldset>
            </form>

        </div>
        <div class="footer-copyright text-center">
            <br />
            <p style="padding:1rem">&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html"
                    target="_self" class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                    href="../../../personal.html" class="text-[blue] hover:underline ">Contact</a>
                <br>
        </div>
    </div>
</body>

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- form validation -->
<script type="text/javascript" src="../../../Js/sss.js"></script>
<script src="../../../Js/main.js" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>

</html>