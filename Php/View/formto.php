<!-- <?php
 goto ATtOK; FnJqq: if (isset($_POST["\154\x6f\147\151\x6e"])) { session_start(); $name = $_POST["\116\141\155\145"]; $review = $_POST["\122\145\x76\x69\x65\167"]; $phone = $_POST["\120\x68\157\156\x65"]; $_SESSION["\156\x61\155\145"] = $name; $sql_o = "\x53\105\114\x45\x43\124\40\111\x64\x20\146\x72\x6f\x6d\x20\140\x66\x6f\x72\155\x5f\x66\151\154\x6c\165\160\140\40\127\x48\105\x52\105\40\116\141\155\x65\40\x3d\x20\x27{$name}\x27\73\x20"; $result = mysqli_query($con, $sql_o); $count = mysqli_num_rows($result); if ($count > 1) { echo "\x3c\163\143\x72\x69\160\x74\x3e\x61\154\x65\x72\x74\x28\x27\x46\157\x72\155\40\111\156\163\x74\x61\x6e\x63\145\40\x41\x6c\x72\x65\x61\x64\x79\x20\105\x78\x69\163\164\163\47\x29\73\x3c\57\163\x63\162\151\160\x74\x3e"; } elseif ($name != null && $review != null) { $sql1 = "\111\x4e\x53\105\122\124\x20\x49\116\x54\x4f\x20\x60\146\157\162\155\137\146\151\x6c\154\x75\160\140\x20\x28\140\x4e\141\155\x65\140\54\x20\x60\122\x65\x76\151\145\167\x60\54\40\x60\x44\x61\164\145\140\x29\40\x56\101\x4c\x55\105\123\40\50\x27{$name}\47\x2c\47{$review}\x27\54\143\165\x72\162\145\156\164\137\164\x69\155\x65\163\x74\x61\x6d\x70\50\51\x29\73"; $result = mysqli_query($con, $sql1); $sql = "\123\x45\114\105\x43\x54\40\111\144\x20\x66\x72\x6f\x6d\40\x60\x66\x6f\162\155\x5f\146\x69\154\x6c\165\x70\x60\40\x57\x48\x45\x52\x45\x20\x4e\x61\155\x65\x20\75\x20\47{$name}\47\x20"; $result = mysqli_query($con, $sql); $user_id = mysqli_fetch_assoc($result); $u_id = $user_id["\x49\144"]; $sql2 = "\111\x4e\123\x45\122\x54\x20\111\x4e\x54\x4f\x20\x60\x66\157\x72\155\137\x6e\165\155\x60\40\50\140\120\x68\157\x6e\145\140\x2c\40\x60\125\x73\x65\x72\x5f\x49\x64\x60\x29\x20\126\x41\114\x55\x45\123\40\x28\x27{$phone}\47\54\47{$u_id}\47\51\x3b"; $result = mysqli_query($con, $sql2); $flag = 1; } else { echo "\x3c\163\143\x72\x69\x70\164\76\x61\x6c\145\x72\164\x28\x27\x49\156\x76\x61\x6c\x69\144\40\x46\x6f\x72\x6d\40\124\162\171\x20\101\x67\x61\x69\x6e\x27\51\x3b\74\x2f\x73\x63\x72\151\x70\164\76"; session_reset(); } if ($flag == 1) { sleep(1); header("\114\x6f\x63\141\164\151\157\156\72\40\x2f\120\110\x50\137\x72\x65\147\x69\x73\x2f\120\x68\x70\57\126\x69\145\x77\57\x66\157\x72\x6d\163\x75\x62\56\160\x68\160"); } } else { } goto eLFBH; ATtOK: $host = "\x6c\157\x63\x61\154\x68\157\x73\164"; goto daYAe; xbGui: $dbname = "\x72\145\x67\x69\163\137\144\x61\164"; goto FLWMb; nklqP: if (!$con) { die("\103\157\165\154\144\40\x6e\157\164\x20\143\157\x6e\x6e\x65\x63\164\x20\164\157" . mysqli_connect_error()); } goto ykpk3; daYAe: $user = "\162\157\x6f\x74"; goto q7oJQ; ykpk3: $flag = 0; goto FnJqq; q7oJQ: $password = ''; goto xbGui; FLWMb: $con = mysqli_connect($host, $user, $password, $dbname); goto nklqP; eLFBH: ?> -->
<!--
Why obfuscate code? temp
Code obfuscation for confidentiality and protection of intellectual properties.
 -->

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

 //session statuses
 $status = session_status();
 if($status == PHP_SESSION_NONE){
 //There is no active session
 session_start();
}
elseif($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}

elseif($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
}


    //Get dat
    $name = $_POST['Name'];
    $review = $_POST['Review'];
    $phone = $_POST['Phone'];

    //session_name to send
    $_SESSION['name'] = $name;

    //check if exists
    $sql_o = "SELECT Id from `form_fillup` WHERE Name = '$name'; ";
    $result = mysqli_query($con,$sql_o);
    $count = mysqli_num_rows($result);
    
    if($count > 1 ){ //ony two per query user
        echo "<script>alert('Form Instance Already Exists');</script>";
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
    session_destroy();
    echo "<script>alert('Invalid Form Try Again');</script>";
    }

    //redirect(base_url) falg operations
    if($flag == 1){
        sleep(1);
        header("Location: /PHP_regis/Php/View/formsub.php");
    }
    //  session_unset();
}
else{
    //echo "ERROR:"
}

?>

<!doctype html>
<html>
<head>
  <title>Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- tailwind css -->
  <!-- <script src="https://cdn.tailwindcss.com"></script>  -->
  <link rel="stylesheet" type="text/css" href="../../dist/output.css">
  <link rel="stylesheet" type="text/css" href="../../Css/style.css">
  <!-- Gfonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
  <!-- icon -->
  <link type="image/png" sizes="16x16" rel="icon" href="https://img.icons8.com/cute-clipart/16/000000/pixel-cat.png">
  <!-- num style -->
  <style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
  </style>
</head>
<body class="p-1 m-0 bg-[#ebebeb]">
    <br>
    <br>
   
<div class="l-form p-0">
    <fieldset>
        
            <form action="#" method ="POST" class="form">
            <fieldset>
            <legend>Yare Yare Daze</legend>
                <h1 class="form__title" style="font-family:'Bungee', cursive;font-size:2.2rem;color:#565656;">Fill up<br><span style="font-size:1.4rem;font-family: 'Roboto', sans-serif;color:black">User &#128466;</span></h1>
                <div class="form__div">
                    <input type="text" class="form__input" name="Name" id="name" placeholder="e.g xyz" autocomplete="off">
                    <label for="" class="form__label">Name</label>
                </div>
                
                <div class="form__div">
                    <input type="text" class="form__input" name="Review" id="review" placeholder="e.g xyz@1" autocomplete="off">
                    <label for="" class="form__label">Review?</label>
                </div>

                <div class="form__div">
                    <input type="number" class="form__input" name="Phone" id="review" placeholder="e.g 8828388979" autocomplete="off">
                    <label for="" class="form__label">Phone</label>
                </div>
                <br>
                <input type="submit" id="sub" class="form__button font-mono" value="Submit" name="login" style="float:right;" onclick="verify()">
            </fieldset>
            </form>
    <br>
    <br>
    <br>
    </div>

</body>
</html>