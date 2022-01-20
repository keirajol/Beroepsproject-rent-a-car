<!DOCTYPE html>
<html>
    <head>
        <title>Reserveren</title>
        <link rel="stylesheet" href="verhuur.css">
        <?php    
        require_once('../OOP/Database.php');
        $database = new Database('cars');
        
        require_once('../OOP/LayoutConventions.php');
        $getLayout = new LayoutConventions();
        ?>
    </head>
    <body>
        <?php
        $getLayout->getNavbarHead();
        ?>
        <div class="car_container">
            <?php
            $database->getCarTable();
            ?>
        </div>
        <?php
        $getLayout->getNavbarFoot();
        ?>
    </body>
</html>