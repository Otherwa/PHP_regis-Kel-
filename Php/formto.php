<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "regis_dat";
$con = mysqli_connect($host,$user,$password,$dbname);
if (!$con){
 die("Could not connect to" . mysqli_connect_error());   
}
//echo "Connection established";
//VALUES
$flag = 0;
if(isset($_POST['login'])){
    //posted then
    session_start();
    $name = $_POST['Name'];
    $review = $_POST['Review'];
    $phone = $_POST['Phone'];

    //check if exists
    $sql_o = "SELECT Id from `form_fillup` WHERE Name = '$name'; ";
    $result = mysqli_query($con,$sql_o);
    $count = mysqli_num_rows($result);
    
    if($count > 1 ){ //ony two per query user
        echo "<script>alert('Form Instance Already Exists');</script>";
        //header("Location: \\PHP_regis\\Php\\formto.php");
    }
    
    elseif($name != null && $review != null){

    $sql1 = "INSERT INTO `form_fillup` (`Name`, `Review`, `Date`) VALUES ('$name','$review',current_timestamp());";
    $result = mysqli_query($con,$sql1);
    //retrive id

    $sql = "SELECT Id from `form_fillup` WHERE Name = '$name' ";
    $result = mysqli_query($con,$sql);

    // query to get primary key of id
    $user_id = mysqli_fetch_assoc($result);
    $u_id = $user_id['Id'];

    //get data u_id to store and pass on to sql2 Query;
    $sql2 = "INSERT INTO `form_num` (`Phone`, `User_Id`) VALUES ('$phone','$u_id');";
    $result = mysqli_query($con,$sql2);

    $flag = 1;
    //if all done set flag
    }
    else{
    echo "<script>alert('Invalid Form Try Again');</script>";
    session_reset();
    }

    //redirect(base_url) falg operations
    if($flag == 1){
        sleep(1);
        header("Location: \\PHP_regis\\Main\\formsub.html");
    }
    session_destroy();
    
}
else{
    //echo "nice";
}

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script> 
  <link rel="stylesheet" href="../Css/style.css">
  <!-- Gfonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <!-- script -->
  <script type="text/javascript" src="../Js/main.js"></script>
</head>
<body class="p-3 m-3 bg-[#ffffff]">
    <br>
    <br>
   
<div class="l-form p-8">
            <form action="#" method ="POST" class="form">
                <h1 class="form__title text-4xl" style="font-family:'Bungee', cursive;">Fill up<br><span style="font-size:1.4rem;font-family: 'Roboto', sans-serif;">User &#128512;</span></h1>
                <div class="form__div">
                    <input type="text" class="form__input" name="Name" id="name" placeholder="e.g xyz">
                    <label for="" class="form__label">Name</label>
                </div>
                
                <div class="form__div">
                    <input type="text" class="form__input" name="Review" id="review" placeholder="e.g xyz@1">
                    <label for="" class="form__label">Review?</label>
                </div>

                <div class="form__div">
                    <input type="text" class="form__input" name="Phone" id="review" placeholder="e.g 8828388979">
                    <label for="" class="form__label">Phone</label>
                </div>
                <br>
                <input type="submit" id="sub" class="form__button font-mono" value="Submit" name="login" style="float:right;" onclick="verify()">
            </form>
    <br>
    <br>
    </div>

</body>
</html>