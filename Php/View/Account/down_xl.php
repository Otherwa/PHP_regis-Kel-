<?php
session_start();
//export.php  
include('../connect.php');


// array questions
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

$con = get_con();

// defined in xlsx_genphp and Below
$total = Get_Count();

$output = "";
if (isset($_POST["export"])) {

    // copy of xlsx_genphp
    $review = array(); // store data
    $con = get_con();
    // store data in 2x2
    // echo "2x2 Store <br>";
    for ($a = 11; $a < 29; $a++) {
        $temp_array = array();
        // echo "<br>";
        for ($rate = 1; $rate < 8; $rate++) {
            $query = "SELECT COUNT(a" . $a  . ") as count1 from answerpats WHERE tname =\"" . $_SESSION["tec"] . "\" AND subject=\"" . $_SESSION["sub"] . "\""  . " AND a" . $a . "=\"" . $rate . "\";";
            $result = mysqli_query($con, $query);
            $result = mysqli_fetch_assoc($result);
            // echo " " . $result['count1'];
            array_push($temp_array, $result['count1']);
        }
        array_push($review, $temp_array);
    }

    $output .= '
   <table class="table" bordered="1">  
                    <tr>
                         <th>Reviews</th>  
                         <td>' . 'Very-Poor' . '</td>  
                         <td>' . 'Poor' . '</td>  
                         <td>' . 'Below-Average' . '</td>  
                         <td>' . 'Average' . '</td>   
                         <td>' . 'Good' . '</td>  
                         <td>' . 'Very-Good' . '</td>   
                         <td>' . 'Excellent' . '</td>  
                    </tr>
  ';

    // add to echo output
    for ($i = 0; $i < 18; $i++) {
        $output .=
            '<tr>
                <th>' . $lab[$i] . '</th>  
                <td>' . ($review[$i][0] / $total * 100) . ' %' . '</td>  
                <td>' . ($review[$i][1] / $total * 100) . ' %' . '</td>  
                <td>' . ($review[$i][2] / $total * 100) . ' %' . '</td>  
                <td>' . ($review[$i][3] / $total * 100) . ' %' . '</td>  
                <td>' . ($review[$i][4] / $total * 100) . ' %' . '</td>  
                <td>' . ($review[$i][5] / $total * 100) . ' %' . '</td>  
                <td>' . ($review[$i][6] / $total * 100) . ' %' . '</td>  
        </tr>
             ';
    }

    $output .= '</table>';
    $name = $_SESSION['tec'] . "_" . $_SESSION['sub'];
    header('Content-Type: application/xlsx');
    header('Content-Disposition: attachment; filename=' . $name . '.xls');
    echo $output;
}

// function
function Get_count()
{
    $con = get_con();

    $query = "SELECT count(*) as `count1` from answerpats WHERE tname=\"" . $_SESSION['tec'] . "\"AND subject =\"" . $_SESSION['sub'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);
    $result = $result['count1'];
    return ($result);
}

// close connection
mysqli_close($con);