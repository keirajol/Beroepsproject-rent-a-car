<!DOCTYPE html>
<html>
<head>
    <?php
    require_once '../OOP/Database.php';
    $database = new Database();
    ?>
    <title>Logged In</title>
</head>
<body>
    <?php
    require_once('../OOP/LayoutConventions.php');
    $getLayout = new LayoutConventions();
    $getLayout->getNavbarHead();
    ?>
    <h1>Welkom</h1>
    <?php
    $getLayout->getNavbarFoot();
    ?>
</body>
</html>