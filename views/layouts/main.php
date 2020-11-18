
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Train WEB page</title>
    <link rel="stylesheet" href="../../web/css/index.css">
    <!--    <link rel="stylesheet" href="lesson1.css">-->
    <!--    <link rel="stylesheet" href="lesson2.css">-->
    <!--    <link rel="stylesheet" href="lesson3.css">-->
    <!--    <link rel="stylesheet" href="lesson3Form.css">-->
</head>

<body>

<header>

    <nav>
        <ul class="menu">
            <li><a href="index.php">NIX</a></li>
            <li><a href="index.php?valueKey=lessons1">Урок 1</a></li>
            <li><a href="index.php?valueKey=lessons2">Урок 2</a></li>
            <li><a href="index.php?valueKey=lessons3">Урок 3</a></li>
        </ul>
    </nav>

</header>


<main>


    <!--    File "index.php" using as layout.
            The pages are loaded depends of "valueKey" value in NAV menu.
    -->
    <!--    --><?php
    //    if (isset($_POST['inputData'])){
    //
    //        include "lesson3Form.php";
    //
    //    } elseif (isset($_POST['displayed'])){
    //
    //        include "lesson3.php";
    //
    //    } elseif (isset($_GET['valueKey'])){
    //
    //        switch ($_GET['valueKey']){
    //            case "lessons1": include "lesson1.php"; break;
    //            case "lessons2": include "lesson2.php"; break;
    //            case "lessons3": include "lesson3.php"; break;
    //
    //        }
    //    } else{
    //
    //        include "hello.php";
    //
    //    }
    //    ?>

</main>


<footer>

    <p class="pFooterMain">Designed by Dmitry Sechyn</p>

</footer>

</body>

</html>
<?php
