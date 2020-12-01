
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
            <button type="submit" name="login" class="btn btn-outline-success logButton">Sign in</button>
        </div>

        <div class="inputButton">
            <button type="submit" name="registration" class="btn btn-outline-primary logButton">Registration</button>
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
