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
            <label for="userEmail">Login</label>
            <input type="text" class="form-control text-center" id="userEmail" name="userLogin" placeholder="<?php echo $userData['loginName']; ?>">
        </div>

        <div class="form-group text-center">
            <label for="userPhone">Phone</label>
            <input type="text" class="form-control text-center" id="userPhone" name="userPhone" placeholder="<?php echo $userData['phone']; ?>">
        </div>

        <div class="form-group text-center">
            <label for="userEmail">Email</label>
            <input type="password" class="form-control text-center" id="userEmail" name="userEmail" placeholder="<?php echo $userData['email']; ?>">
        </div>

        <div class="form-group text-center">
            <label for="userPhoto">Photo</label>
            <input type="password" class="form-control text-center" id="userPhoto" name="userPhoto" placeholder="<?php echo $userData['photo']; ?>">
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



