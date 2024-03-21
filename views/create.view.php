<?php 
require "components/head.php";
require "components/navbar.php";
?>
    <h1> Pievienot pasākumu </h1>
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