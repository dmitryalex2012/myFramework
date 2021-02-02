<?php
/* @var $post array */
?>


<div class="contentPost">

    <h1>
        <?php
        echo 'Post 1. ' . $post['title'] . ' programming language.';
        ?>
    </h1>

    <div class="row">

        <div class="col-md-9 pContent">

            <h5>Description:</h5>

            <?php
            echo $post['content'];
            ?>

        </div>

        <div class="col-md-3">

            <h5>Code example:</h5>

            <?php
            echo $post['codeExample'];
            ?>

        </div>

    </div>

    <div class="pAuthor">
        <?php
        echo $post['author'];
        ?>
    </div>
</div>
