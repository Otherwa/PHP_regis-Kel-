<?php
ob_start();
session_start();
//export.php  
include('../connect.php');


// array questions
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
    for ($a = 11; $a < 36; $a++) {
        $temp_array = array();
        // echo "<br>";
        for ($rate = 1; $rate < 8; $rate++) {
            $query = "SELECT COUNT(a" . $a  . ") as count1 from answerfac WHERE department =\"" . $_SESSION["programme"] . "\" AND a" . $a . "=\"" . $rate . "\";";
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
    for ($i = 0; $i < 25; $i++) {
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
    $name = $_SESSION['programme'];
    header("Content-Type:application/xlsx");
    header('Content-Disposition:attachment;filename=' . $name . '_faculty.xls');
    echo $output;
}

// function
function Get_count()
{
    $con = get_con();

    $query = "SELECT count(*) as `count1` from `answerfac` WHERE department =\"" . $_SESSION['programme'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);
    $result = $result['count1'];
    return ($result);
}

// close connection
mysqli_close($con);
