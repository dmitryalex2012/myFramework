<?php
/* @var $post array */
?>
<div class="contentPost">
    <h1>
        <?php
        echo 'Post 2. ' . $post['title'] . ' programming language.';
        ?>
    </h1>

    <div class="pContent">
        <?php
        echo $post['content'];
        ?>
    </div>

    <div class="pAuthor">
        <?php
        echo $post['author'];
        ?>
    </div>
</div>