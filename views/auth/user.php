<?php
/* @var $message string */
/* @var $userData array */
?>


<p class="pUser">
    <?php
//    echo $message;
//    echo $userData['message'];
    var_dump($userData);
    ?>

    <br>

    <?php
    $login['view'] = 'auth/login';
    $login['message'] = 'Fill all fields.';
    $login = array(
        'loginName' => "Alex",
        'password' => "123"
    );

    var_dump($login);
    ?>

</p>



