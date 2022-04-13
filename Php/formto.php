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
    if($name != null && $review != null){
    $sql = "INSERT INTO `form_fillup` (`Name`, `Review`, `Date`) VALUES ('$name','$review',current_timestamp());";
    $result = mysqli_query($con,$sql);
    $flag = 1;
    
    }
    else{
    echo "<script>alert('Invalid Form Try Again');</script>";
    session_reset();
    }
    //redirect(base_url)
    if($flag == 1){
        header("Location: \\PHP_regis\\Main\\formsub.html");
        session_destroy();
    }
    
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
                <h1 class="form__title text-3xl" style="font-family:'Bungee', cursive;">Fill up<br><span style="font-size:1.4rem;font-family: 'Roboto', sans-serif;">Fellow User &#128512;</span></h1>
                <div class="form__div">
                    <input type="text" class="form__input" name="Name" id="name" placeholder="e.g xyz">
                    <label for="" class="form__label">Name</label>
                </div>

                <div class="form__div">
                    <input type="text" class="form__input" name="Review" id="review" placeholder="e.g xyz@1">
                    <label for="" class="form__label">Review?</label>
                </div>
                <br>
                <input type="submit" class="form__button" value="Submit" name="login" style="float:right;background-color:#006eff" onclick="verify()">
            </form>
            <br>
    <br>
    </div>

</body>
</html>