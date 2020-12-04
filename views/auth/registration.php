
<div  class="inputForm">
    <form action="/auth/registration" method="post">

        <h2>Registration</h2>

<!--        <p class="displayString">You are not logged. Please, login or perform registration.</p><br>-->

        <label class="inputName">
            <input class="stringName" type="text" name="loginName" placeholder="Input login name">
        </label><br>

        <label class="inputEmail">
            <input class="stringEmail" type="text" name="password" placeholder="Input password">
        </label><br>

        <label class="inputEmail">
            <input class="stringEmail" type="text" name="confirmPassword" placeholder="Confirm password">
        </label><br>

        <div class="inputButton">
            <input class="logButton" type="submit" name="registration" value="Register">
        </div>

    </form>
</div>

<div class="massageLogin">
    <?php
    if (isset($message)){
        echo $message;
    }
    ?>
</div>