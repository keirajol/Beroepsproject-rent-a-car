<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Homepage.css">
        <?php
        require('../OOP/DatabaseConnection.php');
        $dbConnect = new DatabaseConnection("localhost", "rent_a_car", "root", "");
        $dbConnect->connect();

        require('../OOP/LayoutConventions.php');
        $getLayout = new LayoutConventions();
        ?>
        <title>Homepage</title>
    </head>
    <body>
        <?php
        $getLayout->getNavbarHead();
        ?>
        <div class="homepage-body">
        <button id="Reserveer-knop" type="button">Reserveer nu!!</button>
        <img id="homepage-pic" src="../IMG/multicars-juist.jpg">
        </div>
        <?php
        $getLayout->getNavbarFoot();
        ?>
    </body>
</html>