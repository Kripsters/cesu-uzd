<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> CKC kolektīvi </h1>
    <table>
        <tr>
            <th>Kolektīvs</th>
        </tr>
        <?php foreach ($posts as $post) { ?>
            <tr>
            <td> 
                <a href="./collectives/show?id=<?=$post["id"]?>"> 
                    <?=htmlspecialchars($post["name"])?> 
                </a>
            </td>
            <!-- <td> <?=htmlspecialchars($post["description"])?> </td> -->
            </tr>
        <?php } ?>
    </table>
    <br/>
    <a href="./collectives/create"> Pievienot </a>
    <br/>
    <a href="./collectives/edit"> Rediģēt </a>
<?php
require "views/components/footer.php";  
?>