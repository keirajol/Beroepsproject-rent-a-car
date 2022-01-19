<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Homepage.css"/>
        <?php
        require_once('../OOP/Database.php');
        $database = new Database();

        require_once('../OOP/LayoutConventions.php');
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
        </div>
        <?php
        $getLayout->getNavbarFoot();
        ?>
    </body>
</html>