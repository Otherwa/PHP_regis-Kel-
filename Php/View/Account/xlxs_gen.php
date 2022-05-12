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
                         <th>ctrlid</th>  
                         <th>cname</th>  
                         <th>tname</th>  
                         <th>a11</th>  
                         <th>a12</th>  
                         <th>a13</th>  
                         <th>a14</th>  
                         <th>a15</th>  
                         <th>a16</th>  
                         <th>a17</th>  
                         <th>a18</th>  
                         <th>a19</th>  
                         <th>a20</th>  
                         <th>a21</th>  
                         <th>a22</th>  
                         <th>a23</th>  
                         <th>a24</th>  
                         <th>a25</th>  
                         <th>a26</th>  
                         <th>a27</th>  
                         <th>a28</th>  
                         <th>suggession</th>  
                         <th>division</th>  
                         <th>sem</th>  
                         <th>subject</th>  
                         <th>academic year</th>  
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
            </tr>
   ';
          }
          $output .= '</table>';
          header('Content-Type: application/xlsx');
          header('Content-Disposition: attachment; filename=answerpat.xls');
          echo $output;
     }
}