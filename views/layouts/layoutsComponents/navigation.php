<?php
if (!isset($userName)){
    $userName = 'Sign in';
}
?>
<nav>
    <ul class="menu">
        <li><a href="/site/index">NIX</a></li>
        <li><a href="/post/index?valueKey=post1">Post 1</a></li>
        <li><a href="/post/index?valueKey=post2">Post 2</a></li>
        <li><a href="/post/index?valueKey=post3">Post 3</a></li>
        <li><a href="/auth/index"><?php echo mb_strimwidth($userName, 0, 15, "...") ?></a></li>
    </ul>
</nav>
