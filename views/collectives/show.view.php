<?php 
require "views/components/head.php";
require "views/components/navbar.php";
$post = $postb[0];
?>
    <h1> CKC kolektīvi </h1>
    <table>
        <tr>
            <th>Kolektīvs</th>
            <th>Apraksts</th>
        </tr>
            <tr>
                <td> <?=htmlspecialchars($post["name"])?> </td>
                <td> <?=htmlspecialchars($post["description"])?> </td>
            </tr>
    </table>
    </br>
    <form method="POST" action="/collectives/delete">
    <button name="id" value="<?= $post["id"] ?>">Delete</button>
    </form>
    </br>
    <a href="/collectives"> Back </a>  
<?php
require "views/components/footer.php";  
?>