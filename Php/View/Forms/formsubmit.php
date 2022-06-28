<?php
session_start();
// php get user name using session variable

// validiting refresh
if (!isset($_SESSION['name'])) {
    header('Location: forms.php');
}

$firstname = explode(" ", $_SESSION['name']);
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Submited</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css CDN (solve after npm install [note]) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../dist/output.css" />
    <link rel="stylesheet" href="../../../Css/style.css" />
    <!-- title color -->
    <meta name="theme-color" content="#ff6600">
    <!-- Gfonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link type="image/png" sizes="16x16" rel="icon" href="../../../imgs/1611814068005.jpg" />
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <script type="text/javascript">
    // formsub to index after 3 sec
    </script>
    <!-- basic css -->
    <style>
    .myfont {
        font-family: "Bungee", cursive;
    }
    </style>
</head>

<body class="p-0 m-0">
    <br />
    <br />
    <br />
    <!-- This requires Tailwind CSS v2.0+ -->
    <div class="bg-[#ffffff] text-center m-2" style="padding: 1rem;">
        <p class="text-4xl myfont antialiased tracking-normal md:text-4xl overline leading-loose">Form Submitted</p>
        <br />
        <p class="font-mono underline text-xl hover:text-[#006eff]"><a style="font-size:1.3rem" href="forms.php">Submit
                Another Form</a></p>
        <br />
        <br />
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-3xl">
            <div class="md:flex border-solid rounded-2xl">
                <div class="md:shrink-0 ">
                    <img class="h-48 w-full object-cover md:h-full md:w-69 rounded-t-lg"
                        src="https://camo.githubusercontent.com/2122bb0983abb5a86fefd552a7122760dfa8872181dfc2e997be6ed07781d300/68747470733a2f2f69302e77702e636f6d2f7777772e7072696e746d61672e636f6d2f77702d636f6e74656e742f75706c6f6164732f323032312f30322f3463626538645f66316564323830306134393634393834383130326336386663356136366535336d76322e6769663f6669743d3437362532433238302673736c3d31"
                        alt="Nyan Cat" />
                </div>
                <div class="p-8 pr-3">
                    <!-- php session data-->
                    <div class="tracking-wide font-mono font-semibold text-xl">
                        <p class="text-[1.6rem]" style="text-align:start;">Konichiwa</p>
                        <br />
                        <p class="text-[blue] font-mono"
                            style="text-align:start;font-family:monospace;font-weight:bold">
                            <?php if (isset($_SESSION['name'])) {
                                echo $firstname[0];
                            } else {
                                echo 'User';
                            } ?>-Kun</p>
                        <br />
                        <p class="text-[1.2rem]" style="text-align:start;"> Your Form Successfully Submitted</p>
                    </div>
                    <br />
                    <p href="#" style="text-align:start"
                        class="block mt-1 leading-tight text-2xl text-black font-mono hover:underline">...</p>
                    <br />
                    <p class="mt-2 text-2xl text-slate-500 font-mono" style="text-align:start">:)</p>
                </div>
            </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <code>(<code id="meme2"></code>)</code>
        <br>
        <img id="meme1" src="" alt="pep" style="height:auto;width:15rem;display:inline-block;">
        <br />
    </div>
</body>
<script src="../../../Js/main.js?v=1" type="text/javascript"></script>
<script src="../../../Js/formsub.js?v=1" type="text/javascript"></script>
<script async type="text/javascript"
    src="https://api.countapi.xyz/hit/KelkarForms.com/415a7523-bb25-4d45-a700-33a48a168a6c/?callback=counter"></script>

</html>