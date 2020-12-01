<?php
/* @var $viewFile array */
?>
<div class="contentPost">

    <h1>
        <?php
        echo 'Post 1. ' . $viewFile['title'] . ' programming language.';
        ?>
    </h1>

    <div class="row">

        <div class="col-md-9 pContent">

            <h5>Description:</h5>

            <?php
            echo $viewFile['content'];
            ?>

        </div>

        <div class="col-md-3">

            <h5>Code example:</h5>

            <?php
            echo $viewFile['codeExample'];
            ?>

        </div>

    </div>

    <div class="pAuthor">
        <?php
        echo $viewFile['author'];
        ?>
    </div>
</div>
