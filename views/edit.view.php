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
    <form method="GET">
        <label>ID(pirmaic ciparins)
            <input name="edit_id"/>
        </label>
        </br>
        <label>Datums un Laiks
            <input name="edit_datetime"/>
        </label>
        </br>
        <label>Nosaukums
            <input name="edit_title"/>
        </label>
        </br>
        <label>Norises vieta
            <input name="edit_venue"/>
        </label>
        <button>Rediģēt!</button>
    </form>
<?php
require "components/footer.php";  
?>