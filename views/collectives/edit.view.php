<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Pasākumi Cēsīs </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li><?=htmlspecialchars($post["id"])?> <?=htmlspecialchars($post["name"])?> / <?=htmlspecialchars($post["description"])?></li>
        <?php } ?>

    </ul>
    <form method="GET">
        <label>ID(pirmaic ciparins)
            <input name="edit_id"/>
        </label>
        </br>
        <label>Nosaukums (kolektīvs)
            <input name="edit_name"/>
        </label>
        </br>
        <label>Apraksts
            <input name="edit_description"/>
        </label>
        </br>
        <button>Rediģēt!</button>
    </form>
    </br>
    <a href="/collectives"> Back </a>  
<?php
require "views/components/footer.php";  
?>