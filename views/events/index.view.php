<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Pasākumi Cēsīs </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <form method="POST" action="/delete">
            <li>
            <a href="./show?id=<?=$post["id"]?>">
             <?=htmlspecialchars($post["title"])?>
              </a>
            <button name="id" value="<?= $post["id"] ?>">Delete</button>
            </form>
            </li>
        <?php } ?>

    </ul>
<?php
require "views/components/footer.php";  
?>