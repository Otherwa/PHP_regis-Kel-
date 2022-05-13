<?php
include('../connect.php');
//on click
session_start();
if (!isset($_SESSION['setFF'])) {
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
}
// INSERT INTO `form_fillup` (`Id`, `Name`, `Review`, `Day`) VALUES ('1', 'Atharv', 'NICE', DAYNAME(CURDATE()));
?>


<!DOCTYPE html>
<html>

<head>
    <title>Faculty Feedback Form</title>
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
        <li><a class="font-mono" href="forms.php" target="_self">Back</a></li>
    </ul>
    <br />
    <br />
    <div class="bg-[#ffffff] text-center content" style="padding:1rem">
        <div class="l-form p-0 ">
            <form action="#" method="POST" class="form">
                <fieldset>
                    <code style="color:red">Still in Production</code>
                    <legend>Yare Yare Daze</legend>

                    <h1 class=" form__title"
                        style="font-family: 'Bungee', cursive; font-size: 2.2rem; color: rgb(119, 195, 196);">
                        <span style="text-decoration:underline">Faculty Feedback Form</span><br />
                        <span style=" font-size: 1.4rem; font-family: 'Roboto' , sans-serif; color: black;">
                            <img src="https://github.githubassets.com/images/mona-loading-dark.gif" alt="octo"
                                style="height:3rem;margin-top:1rem"></span>
                    </h1>


                    <ul style="color:red">
                        <li>
                            Instruction: Please read the statements given and mark against the appropriate response.
                        </li>
                        <li>
                            Note: Your responses will be kept confidential and used only for the stated purpose.
                        </li>
                    </ul>
                    <br />
                    <br />



                    <div class="form__div ">
                        <input type="text" class="form__input" name="faculty_name" id="faculty_name"
                            placeholder="e.g Your Faculty name" autocomplete="off" />
                        <label for="" class="form__label">Faculty Name?</label>
                    </div>

                    <div class="form__div">
                        <input type="text" class="form__input" name="year_service" id="year_service" placeholder="e.g 3"
                            autocomplete="off" />
                        <label for="" class="form__label">Number of years in service?</label>
                    </div>

                    <div class="form__div selectaltered">
                        <label for="department" class="text-sm" style="color:rgb(68, 74, 79)">&squarf;
                            Department:</label>
                        <select name="department" id="department">
                            <option value="Default">--</option>
                            <option value="BA">BA</option>
                            <option value="BSc">Bsc</option>
                            <option value="BCom">BCom</option>
                            <option value="BSc-IT">BSc-IT</option>
                            <option value="BBI">BBI</option>
                            <option value="BAMMC">BAMMC</option>
                            <option value="BAF">BAF</option>
                            <option value="BVoc">BVoc</option>
                            <option value="PGDPCM">PGDPCM</option>

                        </select>
                    </div>
                    <br />
                    <br />

                    <p><code class="text-lg" style="text-decoration: underline">Teaching ,Learning ,Evaluation & Result.
                        </code></p>
                    <br />
                    <!-- selected opts -->
                    <ol>
                        <li>
                            Wi-Fi facility provided in the college for online classes was effective. Please rate it in
                            the
                            form of percentage of the time it was effective:
                            <br />
                            <span class="radio">
                                <p><input type="radio" name="rating1_1" value="80%to100%effective">&nbsp; 80% to 100%
                                    effective&nbsp;</p>
                                <p><input type="radio" name="rating1_1" value="60%to80%effective">&nbsp; 60% to 80%
                                    effective&nbsp;</p>
                                <p><input type="radio" name="rating1_1" value="40%to60%effective">&nbsp; 40% to 60%
                                    effective&nbsp;</p>
                            </span>
                        </li>

                        <br />

                        <li>
                            Communication regarding upcoming meetings/events in the context of teaching, learning and
                            examination has been effective and timely:
                            <br />
                            <span class="radio">
                                <p><input type="radio" name="rating1_2" value="Strongly-Agree">&nbsp;
                                    Strongly-Agree&nbsp;</p>
                                <p><input type="radio" name="rating1_2" value="Agree">&nbsp; Agree&nbsp;</p>
                                <p><input type="radio" name="rating1_2" value="Disagree">&nbsp; Disagree&nbsp;</p>
                                <p><input type="radio" name="rating1_2" value="Strongly-Disagree">&nbsp;
                                    Strongly-Disagree&nbsp;</p>
                            </span>
                        </li>

                        <br />

                        <li>
                            Faculty members are encouraged to update their knowledge and skills:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating1_3" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating1_3" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating1_3" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating1_3" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Faculty members are encouraged to register for M.Phil., Ph.D. and Post-Doctoral
                            Degree/Project:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating1_4" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating1_4" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating1_4" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating1_4" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Faculty members get duty leave to participate in seminars / workshops / symposia /
                            conferences:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating1_5" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating1_5" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating1_5" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating1_5" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Faculty members get reimbursement of registration fees when they participate in seminars /
                            workshops / symposia / conferences:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating1_6" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating1_6" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating1_6" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating1_6" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Faculty members are encouraged to organize seminars / workshops / symposia / conferences:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating1_7" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating1_7" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating1_7" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating1_7" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Faculty members are encouraged to establish linkage with Industry:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating1_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating1_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating1_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating1_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                    </ol>

                    <br />

                    <p><code class="text-lg" style="text-decoration: underline">Governance.
                        </code></p>

                    <br />

                    <ol>
                        <li>
                            The Management-Staff get-together is held every year:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_1" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_1" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_1" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_1" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            The management has provided updated infrastructure required for effective teaching-learning
                            process:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_2" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_2" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_2" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_2" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            The remuneration/salary that you receive for your services to the college is satisfactory
                            (Only
                            for SFC/Ad-Hoc Staff):
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_3" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_3" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_3" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_3" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            The Management acknowledges higher degrees/qualifications acquired by staff members with
                            financial increments (Only for SFC/Ad-Hoc Staff):
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_4" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_4" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_4" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_4" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            The Management acknowledges higher degrees/qualifications acquired by staff members with
                            financial increments (Only for SFC/Ad-Hoc Staff):
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_5" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_5" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_5" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_5" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            The registrar and other administrative staff of the college are accessible:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_6" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_6" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_6" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_6" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            The registrar and other administrative staff of the college address the issues and concerns
                            related to administration effectively:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_7" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_7" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_7" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_7" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            The IQAC is effective in promoting quality initiatives in the college:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />
                    </ol>

                    <br />

                    <p><code class="text-lg" style="text-decoration: underline">Infrastructure & Other Facilities.
                        </code></p>

                    <br />
                    <ol>
                        <li>
                            The staffroom is clean and well maintained:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Toilets and washrooms are clean and well maintained:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Clean drinking water is available in the college:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Food quality in the canteen is good:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            The rates of the food items in the canteen are reasonable:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Attitude of the canteen staff and service received was good:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Attitude of the canteen staff and service received was good:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Way of cataloguing and arrangement of books in the library is effective:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />

                        <li>
                            Availability and accessibility of online educational resources in college on library
                            facility is
                            good:
                            <br />
                            <span class="radio">
                                <input type="radio" name="rating2_8" value="Strongly-Agree">&nbsp; Strongly-Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Agree">&nbsp; Agree&nbsp;
                                <input type="radio" name="rating2_8" value="Disagree">&nbsp; Disagree&nbsp;
                                <input type="radio" name="rating2_8" value="Strongly-Disagree">&nbsp;
                                Strongly-Disagree&nbsp;
                            </span>
                        </li>

                        <br />
                    </ol>


                    <br />
                    <p><code class="text-lg" style="text-decoration: underline">Others.
                        </code></p>

                    <br />

                    <p>Three things that you are proud of about the institute:</p>
                    <br />
                    <div class="form__div ">

                        <input type="text" class="form__input" name="proud_inst" id="faculty_name"
                            placeholder="e.g Misal Pav Price ka Bohot Hai." autocomplete="off" />
                        <label for="" class="form__label">Opinions?</label>
                    </div>

                    <p>Suggestions for developmental areas of the institute :</p>
                    <br />
                    <div class="form__div ">

                        <input type="text" class="form__input" name="devlopement" id="faculty_name"
                            placeholder="e.g Chatri ke liye ek Stand" autocomplete="off" />
                        <label for="" class="form__label">Opinions?</label>
                    </div>

                    <br />
                    <br />
                    <input type="submit" id="sub" class="form__button font-mono" value="Submit" name="submit"
                        style="float: right;" />
                </fieldset>
            </form>
            <br />
            <br />
            <br />
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

<!-- form validation -->
<script type="text/javascript" src="../../../Js/papto.js"></script>
<script src="../../../Js/main.js" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>


</html>