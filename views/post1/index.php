<?php
/* @var $post array */
?>
<div class="contentPost">
    <h1>Post 1</h1>

    <h2>
        <?php
        echo $post['title'];
        ?>
    </h2>

    <div class="pContent">
        <?php
        echo $post['content'];

        var_dump($result);

        ?>
    </div>

    <div class="pAuthor">
        <?php
        echo $post['author'];
        ?>
    </div>
</div>
