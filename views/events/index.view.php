<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Pasākumi Cēsīs </h1>
    <ul>
        <?php foreach ($posts as $post) { ?>
            <li>
            <a href="./event/show?id=<?=$post["id"]?>">
             <?=htmlspecialchars($post["title"])?>
              </a>
            </li>
        <?php } ?>
        <br/>
        <a href="./event/create"> Pievienot </a>
        <br/>
        <a href="./event/edit"> Rediģēt </a>
    </ul>
<?php
require "views/components/footer.php";  
?>