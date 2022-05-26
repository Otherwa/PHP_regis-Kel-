<?php
//export.php  
include('../connect.php');

$con = get_con();
$output = "QUERY";
if (isset($_POST["export"])) {
     $query = "SELECT * FROM `answerpats`";
     $result = mysqli_query($con, $query);
     if (mysqli_num_rows($result) > 0) {
          $output .= '
   <table class="table" bordered="1">  
                    <tr>
                    // change markup here to question for easy editing of headers
                         <th>ctrlid</th>  
                         <th>cname</th>  
                         <th>tname</th>  
                         <th>Positive and motivating attitude towards students.</th>  
                         <th>Readiness to resolve students doubts and general availability / accessibility to students.Positive and motivating attitude towards students.</th>  
                         <th>Worked hard to create a feeling of belongingness in a classroom without walls.</th>  
                         <th>Command over the subject.</th>  
                         <th>Skills in making the subject interesting.</th>  
                         <th>Command over the medium of instruction(language) / communication skills</th>  
                         <th>Clarity in approach / thinking.</th>  
                         <th>Punctuality and regularity in taking lectures and practicals</th>  
                         <th>Proficiency in handling online classroom platforms.</th>  
                         <th>Time management skill \ skill of completing the syllabus with doubt solving sessions in time.</th>  
                         <th>Use of case studies, illustration, current events, anecdotes in teaching.ommand over the subject.</th>  
                         <th>Use of interactive teaching - seminars, tutorials, quizzes, assignments etc.</th>  
                         <th>Command over the medium of instruction(language) / communication skills</th>  
                         <th>Giving references for further reading.</th>  
                         <th>Conducting evaluation by periodic tests / questions answer sessions or by designing quizzes / tests / assignments / examinations and projects to evaluate students.</th>  
                         <th>Encouraging students to apply in real life whatever they have learnt in classrooms.</th>  
                         <th>Counselling : Career / placement / personal.</th>  
                         <th>Stimulating a sense of social responsibility.</th>  
                         <th>suggession</th>  
                         <th>division</th>  
                         <th>sem</th>  
                         <th>subject</th>  
                         <th>academic year</th>  
                         <th>timestamp</th>  
                    </tr>
  ';
          while ($row = mysqli_fetch_array($result)) {
               $output .= '
            <tr>  
                         <td>' . $row["ctrlid"] . '</td>  
                         <td>' . $row["cname"] . '</td>  
                         <td>' . $row["tname"] . '</td>  
                         <td>' . $row["a11"] . '</td>  
                         <td>' . $row["a12"] . '</td>  
                         <td>' . $row["a13"] . '</td>  
                         <td>' . $row["a14"] . '</td>  
                         <td>' . $row["a15"] . '</td>  
                         <td>' . $row["a16"] . '</td>  
                         <td>' . $row["a17"] . '</td>  
                         <td>' . $row["a18"] . '</td>  
                         <td>' . $row["a19"] . '</td>  
                         <td>' . $row["a20"] . '</td>  
                         <td>' . $row["a21"] . '</td>  
                         <td>' . $row["a22"] . '</td>  
                         <td>' . $row["a23"] . '</td>  
                         <td>' . $row["a24"] . '</td>  
                         <td>' . $row["a25"] . '</td>  
                         <td>' . $row["a26"] . '</td>  
                         <td>' . $row["a27"] . '</td>  
                         <td>' . $row["a28"] . '</td>  
                         <td>' . $row["suggession"] . '</td>  
                         <td>' . $row["division"] . '</td>  
                         <td>' . $row["sem"] . '</td>  
                         <td>' . $row["subject"] . '</td>  
                         <td>' . $row["academic_year"] . '</td>    
                         <td>' . $row["Time"] . '</td>    
            </tr>
   ';
          }
          $output .= '</table>';
          header('Content-Type: application/xlsx');
          header('Content-Disposition: attachment; filename=answerpat.xls');
          echo $output;
     }
}