<?php
/* @var $message string */
/* @var $userData array */
?>


    <?php
//    echo '<pre>';
//    var_dump($userData);
//    echo '</pre>';
    ?>


<div class="userForm">
    <form  action="/user/dataChange" method="post">

        <div class="form-group text-center">
            <label for="userEmail">You login: <?php echo $userData['loginName']; ?></label>
            <input type="text" class="form-control text-center" id="userEmail" name="userLogin" placeholder="New login">
        </div>

        <div class="form-group text-center">
            <label for="userPhone">You phone: <?php echo $userData['phone']; ?></label>
            <input type="text" class="form-control text-center" id="userPhone" name="userPhone" placeholder="New phone number">
        </div>

        <div class="form-group text-center">
            <label for="userEmail">You email: <?php echo $userData['email']; ?></label>
            <input type="password" class="form-control text-center" id="userEmail" name="userEmail" placeholder="New email">
        </div>

        <div class="form-group text-center">
            <label for="userPhoto">You photo: <?php echo $userData['photo']; ?></label>
            <input type="password" class="form-control text-center" id="userPhoto" name="userPhoto" placeholder="Change photo">
        </div>

        <div class="row">
            <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-outline-primary text-center changeButton">Save changes</button>
            </div>

            <div class="col-md-6 text-left">
                <button type="submit" class="btn btn-outline-primary text-center saveButton">Load photo</button>
            </div>
        </div>

    </form>
</div>



