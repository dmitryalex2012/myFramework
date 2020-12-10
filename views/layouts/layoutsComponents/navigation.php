<?php
if (!isset($userName)){
    $userName = 'Log in';
}
?>
<nav>
    <ul class="menu">
        <li><a href="/site/index">NIX</a></li>
        <li><a href="/post/index?valueKey=post1">Post 1</a></li>
        <li><a href="/post/index?valueKey=post2">Post 2</a></li>
        <li><a href="/post/index?valueKey=post3">Post 3</a></li>
        <li><a href="/auth/index"><?php echo mb_strimwidth($userName, 0, 15, "...") ?></a></li>
        <?php
        if ($userName != 'Log in'):
        ?>
            <li><a href="/auth/out">Log out</a></li>
        <?php
        endif;
        ?>
    </ul>
</nav>
