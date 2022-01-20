<!DOCTYPE html>
<html>
<head>
    <title>Reserveren</title>
    <link rel="stylesheet" href="verhuur.css" />
    <?php
        require_once('../OOP/Database.php');
        $database = new Database('receipt');

        require_once('../OOP/LayoutConventions.php');
        $getLayout = new LayoutConventions();
        $id = $_GET['id'];
    ?>
</head>
<body>
    <?php
    $getLayout->getNavbarHead();
    $database->getReceipt($_SESSION['user'], $id);
    $getLayout->getNavbarFoot();
    ?>
</body>
</html>