<!DOCTYPE html>
<html>
    <head>
        <title>Reservering/Info</title>
        <?php
        require_once('../OOP/Database.php');
        $database = new Database('users');

        require_once('../OOP/LayoutConventions.php');
        $getLayout = new LayoutConventions();
        ?>
    </head>
    <body>
        <?php
        $getLayout->getNavbarHead();
        $database->getUserReservation($_SESSION['user']);
        $getLayout->getNavbarFoot();
        ?>
    </body>
</html>