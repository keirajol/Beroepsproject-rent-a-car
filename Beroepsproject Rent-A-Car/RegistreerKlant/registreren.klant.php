<!DOCTYPE html>
<html>
<head>
    <head>
        <title></title>
        <?php
        require('../OOP/DatabaseConnection.php');
        $dbConnect = new DatabaseConnection("localhost", "rent_a_car", "roots", "");
        $dbConnect->connect();

        require('../OOP/LayoutConventions.php');
        $getLayout = new LayoutConventions();
        ?>
    </head>
</head>
<body>
    <?php
        $getLayout->getNavbarHead();
    ?>

    <?php
        $getLayout->getNavbarFoot();
    ?>
</body>
</html>