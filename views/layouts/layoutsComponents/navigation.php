<?php
/* @var $user array */

if (!isset($user['name'])){
    $user['name'] = 'Log in';
}
?>

<nav>
    <ul class="menu">
        <li><a href="/site/index">NIX</a></li>
        <li><a href="/post/index?valueKey=post1">Post 1</a></li>
        <li><a href="/post/index?valueKey=post2">Post 2</a></li>
        <li><a href="/post/index?valueKey=post3">Post 3</a></li>
        <li><a href="/auth/index" class="nameInNav"><?php echo mb_strimwidth($user['name'], 0, 15, "...") ?></a>
            <?php if (isset($user['photo'])): ?>
            <img class="navigationAvatar" src="<?php echo $user['photo']; ?>" alt="">
            <?php endif; ?>
        </li>
        <?php if ($user['name'] != 'Log in'): ?>
            <li><a href="/auth/out">Log out</a></li>
        <?php endif;
        ?>
    </ul>
</nav>
