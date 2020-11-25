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
//        echo $post['content'];

//        $myArray = (array)$result;
//        var_dump($myArray);
//        echo $myArray['title'];

//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';
        echo $result['content'];
//        echo $result[2];
//        echo gettype($result);

//                    foreach($result as $row) {

//                        echo "<pre>";
//                        print_r($row);
//                        echo "</pre>";

//                        print $row['id'] . "\r\n";
//                        print $row['title'] . "\r\n";
//                        print $row['content'] . "\n";
//                        print $row['note'] . "\n";
//                        echo  "<br>";
//                    }

        ?>
    </div>

    <div class="pAuthor">
        <?php
        echo $post['author'];
        ?>
    </div>
</div>
