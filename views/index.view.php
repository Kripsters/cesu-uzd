<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> Pasākumi Cēsīs </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li><?=$post["date_and_time"]?> / <?=$post["title"]?> / <?=$post["venue"]?></li>
        <?php } ?>

    </ul>
<?php
require "components/footer.php";  
?>