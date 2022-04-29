<?php  
//export.php  
$host = "localhost";
$user = "root";
$password = "";
$dbname = "regis_dat";
$con = mysqli_connect($host, $user, $password, $dbname);
$output = "QUERY";
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM `form_fillup`";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Id</th>  
                         <th>Name</th>  
                         <th>Date/Time</th>  
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
            <tr>  
                         <td>'.$row["Id"].'</td>  
                         <td>'.$row["Name"].'</td>  
                         <td>'.$row["Day"].'</td>  
            </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xlsx');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>