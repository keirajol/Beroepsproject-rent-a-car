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
        try
        {
            if ($_SESSION['user'] != null)
            {
                $database->getUserReservation($_SESSION['user'], 'cars', $_GET['id']);
            }
            else
            {
                throw new Exception("U bent niet ingelogd!");
            }
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage() . "<br/>";
        }
        $getLayout->getNavbarFoot();
        ?>
    </body>
</html>