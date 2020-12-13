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
    <form  action="/user/dataChange" method="post" enctype="multipart/form-data">

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
            <input type="text" class="form-control text-center" id="userEmail" name="userEmail" placeholder="<?php echo $userData['email']; ?>">
        </div>

        <div class="form-group text-center">

            <?php if (!empty($userData['photo'])): ?>
                <label class="userAvatarLabel">Avatar</label><br>
                <img src="<?php echo $userData['photo']; ?>" alt="" class="userAvatar">
                <br>
            <?php endif; ?>

            <label for="userAvatar">For change avatar</label>
            <input id="userAvatar" type="file" name="userPhoto">

        </div>

            <div class="saveChangesUser">
                <button type="submit" class="btn btn-outline-primary text-center changeButton">Save changes</button>
            </div>

    </form>
</div>



