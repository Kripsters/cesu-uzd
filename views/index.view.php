<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> Pasākumi Cēsīs </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li><?=htmlspecialchars($post["date_and_time"])?> / <?=htmlspecialchars($post["title"])?> / <?=htmlspecialchars($post["venue"])?></li>
        <?php } ?>

    </ul>
<?php
require "components/footer.php";  
?>