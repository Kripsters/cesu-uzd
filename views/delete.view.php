<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> Pasākumi Cēsīs </h1>
    <ul>
    <?php foreach ($posts as $post) { ?>
            <li> <?=htmlspecialchars($post["id"])?> / <?=htmlspecialchars($post["date_and_time"])?> / <?=htmlspecialchars($post["title"])?> / <?=htmlspecialchars($post["venue"])?></li>
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