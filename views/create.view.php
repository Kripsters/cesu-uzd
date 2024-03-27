<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> Pievienot pasākumu </h1>
    <?php if (isset($errors["datetime"])) { ?>
                <p> <?= $errors["datetime"] ?> </p>
    <?php } ?>
    <?php if (isset($errors["title"])) { ?>
                <p> <?= $errors["title"] ?> </p>
    <?php } ?>
    <?php if (isset($errors["title"])) { ?>
                <p> <?= $errors["venue"] ?> </p>
    <?php } ?>
    <form method="POST">
        <label>Datums un laiks
            <input name="date_and_time"/>
        </label>
        <label>Nosaukums
            <input name="title"/>
        </label>
        <label>Norises vieta
            <input name="venue"/>
        </label>
        <button>Submit</button>
    </form>
<?php
require "components/footer.php";  
?>