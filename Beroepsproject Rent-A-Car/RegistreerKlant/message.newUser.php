<!DOCTYPE html>
<html>
<head>
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
    <h1>
        Welkom gebruiker!
    </h1>
    <?php
        $getLayout->getNavbarFoot();
    ?>
</body>
</html>