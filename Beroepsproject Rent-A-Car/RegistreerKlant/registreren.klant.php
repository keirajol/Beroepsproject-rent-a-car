<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php
    require_once('../OOP/DatabaseConnection.php');
    $dbConnect = new DatabaseConnection("localhost", "rent_a_car", "root", "");
    $dbConnect->connect();

    require_once('UserController.php');
    $loginController = new UserController();

    require_once('../OOP/LayoutConventions.php');
    $getLayout = new LayoutConventions();
    ?>
</head>
<body>
    <?php
        $getLayout->getNavbarHead();
    ?>
    <form action="registreren.klant.php" method="post" >
        <input placeholder="Gebruikersnaam" type="text" name="Gebruikersnaam" required="required"/>
        <input placeholder="Email" type="email" name="Email" required="required"/>
        <input placeholder="Wachtwoord" type="password" name="Wachtwoord" required="required"/>
        <input placeholder="Herhaal Wachtwoord" type="password" name="HerhaalWachtwoord" required="required"/>
        <input type="submit" name="submit" value="Registreren"/>
    </form>
    <?php
        $getLayout->getNavbarFoot();

        if(isset($_POST['submit']))
        {
            try
            {
                $loginController->createUser($_POST['Gebruikersnaam'], $_POST['Wachtwoord'], $_POST['HerhaalWachtwoord'], $_POST['Email']);
            } catch(Exception $e)
            {
                $e->getMessage() . "<br>";
            }
        }
    ?>
</body>
</html>