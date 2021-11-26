<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php
    require('../OOP/DatabaseConnection.php');
    $dbConnect = new DatabaseConnection("localhost", "rent_a_car", "root", "");
    $dbConnect->connect();

    require('../OOP/LayoutConventions.php');
    $getLayout = new LayoutConventions();
    ?>
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