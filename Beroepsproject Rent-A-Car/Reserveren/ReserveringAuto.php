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
        $database-> getId($_GET['id']);
        $database->getUserReservation($_SESSION['user'], 'cars');
        $getLayout->getNavbarFoot();
        ?>
    </body>
</html>