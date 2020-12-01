<?php
/* @var $viewFile array */
?>
<div class="contentPost">
    <h1>
        <?php
        echo 'Post 3. ' . $viewFile['title'] . ' programming language.';
        ?>
    </h1>

    <div class="pContent">
        <?php
        echo $viewFile['content'];
        ?>
    </div>

    <div class="pAuthor">
        <?php
        echo $viewFile['author'];
        ?>
    </div>
</div>