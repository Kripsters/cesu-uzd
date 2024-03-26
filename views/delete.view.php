<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> Pasākumi Cēsīs </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li><?=$post["id"] ?> / <?=$post["date_and_time"]?> / <?=$post["title"]?> / <?=$post["venue"]?></li>
        <?php } ?>

    </ul>
    <form method="GET">
        <label>Dzēst pēc cipara
            <input name="delete_id"/>
        </label>
        <button>Dzēst!</button>
    </form>
<?php
require "components/footer.php";  
?>