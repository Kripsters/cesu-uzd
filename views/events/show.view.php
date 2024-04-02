<?php 
require "views/components/head.php";
require "views/components/navbar.php";
$post = $postb[0];
?>
    <h1> <?=htmlspecialchars($post["title"])?> </h1>

            <p><?=htmlspecialchars($post["date_and_time"])?></p>
            <p><?=htmlspecialchars($post["title"])?></p>
            <p><?=htmlspecialchars($post["venue"])?></p>
            <a href="./"> Back </a>  
<?php
require "views/components/footer.php";  
?>