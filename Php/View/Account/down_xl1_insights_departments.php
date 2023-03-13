<?php
ob_start();
session_start();
//export.php  
include('../connect.php');


// array questions
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
    for ($a = 11; $a < 28; $a++) {
        $temp_array = array();
        // echo "<br>";
        for ($rate = 1; $rate < 8; $rate++) {
            $query = "SELECT COUNT(a" . $a  . ") as count1 from answersss WHERE programme =\"" . $_SESSION["programme"]   . "\" AND a" . $a . "=\"" . $rate . "\";";
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
    for ($i = 0; $i < 17; $i++) {
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
    header('Content-Disposition:attachment;filename=' . $name . '.xls');
    echo $output;
}

// total number
function Get_count()
{
    $con = get_con();

    $query = "SELECT count(*) as `count1` from `answersss` WHERE programme =\"" . $_SESSION['programme'] . "\";";
    $result = mysqli_query($con, $query);
    $result = mysqli_fetch_array($result);
    $result = $result['count1'];
    return ($result);
}

// close connection
mysqli_close($con);
