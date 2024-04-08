<?php 
require "views/components/head.php";
require "views/components/navbar.php";
//dd($post);
?>

<h1>Edit a post</h1>
<form method="POST">
<input name="id" value="<?= $post["id"] ?>" type="hidden">
        <label>Name
            <input name="name" value="<?= $_POST["name"] ?? $post["name"] ?>"/>
            <?php if (isset($errors["name"])) { ?>
                <p class="invalid-data"> <?= $errors["name"] ?> </p>
            <?php } ?>
        </label>
        <label>Description
        <input name="description" value="<?= $_POST["description"] ?? $post["description"] ?>"/>
            <?php if (isset($errors["descriptions"])) { ?>
                <p class="invalid-data"> <?= $errors["description"] ?> </p>
            <?php } ?>
    <?php if (isset($errors["cat_id"])) { ?>
        <p class="invalid-data"> <?= $errors["cat_id"] ?> </p>
    <?php } ?>
        </label>
        <button>Submit</button>
    </form>
<?php
require "views/components/footer.php";  
?>