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
    <div>hello</div>
    <?php
    $getLayout->getNavbarFoot();
    ?>
</body>
</html>