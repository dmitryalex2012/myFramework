<?php
//
//?>

<?php
///** Converting inputted string */
//if (($_POST['inputData']) === ""){
//    $inputtedString = "Вы ничего не ввели";
//} else{
//    $inputtedString = strrev($_POST['inputData']);
//}
//?>
<!---->
<!--<div  class="outForm">-->
<!--    <form action="index.php" method="post">-->
<!---->
<!--        <p class="displayString">--><?php //echo $inputtedString; ?><!--</p><br>-->
<!---->
<!--        <div class="outButton">-->
<!--            <input type="submit" name="displayed" value="Registration">-->
<!--        </div>-->
<!---->
<!--    </form>-->
<!--</div>-->


<!--<div  class="outForm">-->
<!--    <form action="index.php" method="post">-->
<!---->
<!--        <p class="displayString">Input</p><br>-->
<!---->
<!--        <label>Ваше имя: <input type="text" name="name"></label>-->
<!--        <label>Ваш email: <input type="text" name="email"></label>-->
<!--        <label>Сообщение: <textarea name="message"></textarea></label>-->
<!---->
<!--        <div class="outButton">-->
<!--            <input type="submit" name="displayed" value="Registration">-->
<!--        </div>-->
<!---->
<!--    </form>-->
<!--</div>-->

<div  class="inputForm">
    <form action="/auth/testLogin" method="post">

        <p class="displayString">You are not logged. Please, login or perform registration.</p><br>

        <label class="inputName">
            <input class="stringName" type="text" name="loginName" placeholder="Input login name">
        </label><br>

        <label class="inputEmail">
            <input class="stringEmail" type="text" name="password" placeholder="Input password">
        </label><br>

        <div class="inputButton">
            <input type="submit" value="Login">
        </div>

    </form>
</div>
