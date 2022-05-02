<?php
session_start();
// php get user name using session variable
$firstname = explode(" ", $_SESSION['name']);
// validiting refresh
if (!isset($_SESSION['name'])) {
    header('Location: /PHP_regis/Php/View/formto.php');
}
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Submited</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind css CDN (solve after npm install [note]) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../dist/output.css" />
    <link rel="stylesheet" href="../../../Css/style.css" />
    <!-- title color -->
    <meta name="theme-color" content="#006eff;" />
    <!-- Gfonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet" />
    <!-- icon -->
    <link type="image/png" sizes="16x16" rel="icon" href="../../../imgs/1611814068005.jpg" />
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

<body class="p-1 m-0">
    <br />
    <br />
    <br />
    <!-- This requires Tailwind CSS v2.0+ -->
    <div class="bg-[#ffffff] text-center p-3 m-2">
        <p class="text-4xl myfont antialiased tracking-normal md:text-4xl overline leading-loose">Form Submitted</p>
        <br />
        <p class="font-mono underline text-xl hover:text-[#006eff]"><a href="formto.php">Submit Another Form</a></p>
        <br />
        <br />
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-3xl">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-69"
                        src="https://camo.githubusercontent.com/2122bb0983abb5a86fefd552a7122760dfa8872181dfc2e997be6ed07781d300/68747470733a2f2f69302e77702e636f6d2f7777772e7072696e746d61672e636f6d2f77702d636f6e74656e742f75706c6f6164732f323032312f30322f3463626538645f66316564323830306134393634393834383130326336386663356136366535336d76322e6769663f6669743d3437362532433238302673736c3d31"
                        alt="Nyan Cat" />
                </div>
                <div class="p-8 pr-3">
                    <!-- php session data-->
                    <div class="tracking-wide font-mono font-semibold text-xl">
                        <p class="text-[1.6rem]" style="text-align:start;">Konichiwa</p>
                        <br />
                        <p class="text-[blue] font-mono" style="text-align:start;">
                            <?php if (isset($_SESSION['name'])) {
                                echo $firstname[0];
                            } else {
                                echo 'User';
                            } ?>-Kun</p>
                        <br />
                        <p class="text-[1.2rem]" style="text-align:start;"> Your Form Sucessfully Submitted</p>
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
        <div class=" footer-copyright">
            <br />
            <p>&copy; | Copyright 2022 - ♾️ All rights reserved | <a href="../../../term.html" target="_blank"
                    class="text-[blue] hover:underline leading-normal">Terms & Conditions</a> | <a
                    href="../../../personal.html" class="text-[blue] hover:underline " target="_blank">Contact</a>
                <br />
        </div>
    </div>
</body>

</html>