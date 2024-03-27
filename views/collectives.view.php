<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> CKC kolektīvi </h1>
    <table>
        <tr>
            <th>Kolektīvs</th>
            <th>Apraksts</th>
        </tr>
        <?php foreach ($posts as $post) { ?>
            <tr>
                <td> <?=htmlspecialchars($post["name"])?> </td>
                <td> <?=htmlspecialchars($post["description"])?> </td>
            </tr>
        <?php } ?>
    </table>
<?php
require "components/footer.php";  
?>