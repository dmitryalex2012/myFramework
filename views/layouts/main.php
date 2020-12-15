
<?php
/* @var $content string */
?>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Train WEB page</title>
    <link rel="stylesheet" href="../../web/css/main.css">
    <link rel="stylesheet" href="../../web/css/index.css">
    <link rel="stylesheet" href="../../web/css/login.css">
    <link rel="stylesheet" href="../../web/css/user.css">
    <link rel="stylesheet" href="../../web/css/registrationSuccessful.css">
    <link rel="stylesheet" href="../../web/css/dataChanged.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<header>

    <?php
    include 'layoutsComponents/navigation.php';
    ?>

</header>


<main>

    <?php
    echo $content;
    ?>

</main>


<footer>

    <?php
    include 'layoutsComponents/footer.php';
    ?>

</footer>

</body>

</html>
<?php
