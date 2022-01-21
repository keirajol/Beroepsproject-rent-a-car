<!DOCTYPE html>
<html>
    <head>
        <title>AdminHub</title>
        <?php
        require_once ('../OOP/Database.php');
        require_once ('../OOP/LayoutConventions.php');

        $getLayout = new LayoutConventions();
        $database = new Database('employees');
        ?>

    </head>
<body>
    <?php
    $getLayout->getNavbarHead();
    $database->alterCredentials();
    $getLayout->getNavbarFoot();
    ?>
</body>
</html>
<?php

?>