<?php
/* @var $viewFile array */
?>
<div class="contentPost">
    <h1>Post 1</h1>

    <h2>
        <?php
        echo $viewFile['title'];
        ?>
    </h2>

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
