<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Pievienot kolektīvu </h1>
    <?php if (isset($errors["name"])) { ?>
                <p> <?= $errors["name"] ?> </p>
    <?php } ?>
    <?php if (isset($errors["description"])) { ?>
                <p> <?= $errors["description"] ?> </p>
    <?php } ?>
    <form method="POST">
        <label>Nosaukums (kolektīvs)
            <input name="name"/>
        </label>
        <label>Apraksts
            <input name="description"/>
        </label>
        <button>Submit</button>
    </form>
    </br>
    <a href="/collectives"> Back </a>  
<?php
require "views/components/footer.php";  
?>