
<?php
/* @var $content string */
?>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Train WEB page</title>
    <link rel="stylesheet" href="../../web/css/main.css">
    <link rel="stylesheet" href="../../web/css/index.css">
    <!--    <link rel="stylesheet" href="lesson1.css">-->
    <!--    <link rel="stylesheet" href="lesson2.css">-->
    <!--    <link rel="stylesheet" href="lesson3.css">-->
    <!--    <link rel="stylesheet" href="lesson3Form.css">-->
</head>

<body>

<header>

    <?php
    include 'layoutsComponents/navigation.php';
    ?>

</header>


<main>

    <?php
//    print_r($post);
//    print_r($temp);



//    $myArray = ['temp123' => "Ok",
//        'temp45' => "Ok1"];
//
//    var_dump(extract($myArray));
//    echo "<br>";
//    echo $temp123;
//    echo "<br>";
//    echo $temp45;




    echo $content;
    ?>

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

    <?php
    include 'layoutsComponents/footer.php';
    ?>

</footer>

</body>

</html>
<?php
