<?php
/* @var $result array */
?>
<div class="contentPost">
    <h1>Post 2</h1>

    <h2>
        <?php
        echo $result['title'];
        ?>
    </h2>

    <div class="pContent">
        <?php
        echo $result['content'];
        ?>
    </div>

    <div class="pAuthor">
        <?php
        echo $result['author'];
        ?>
    </div>
</div>
