<?php
session_start();
?>

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
    <form action="registreren.klant.php" method="post" >
        <input placeholder="Gebruikersnaam" type="text" name="Gebruikersnaam" required="required"/>
        <input placeholder="Email" type="email" name="Email" required="required"/>
        <input placeholder="Wachtwoord" type="password" name="Wachtwoord" required="required"/>
        <input placeholder="Herhaal Wachtwoord" type="password" name="HerhaalWachtwoord" required="required"/>
        <input type="submit" name="createUser" value="Registreren"/>
    </form>
    <?php
        $getLayout->getNavbarFoot();

        if(isset($_POST['createUser']))
        {
            try
            {
                $dbConnect->createUser($_POST['Gebruikersnaam'], $_POST['Email'], $_POST['Wachtwoord'], $_POST['HerhaalWachtwoord']);
            } catch(Exception $e)
            {
                $e->getMessage() . "<br>";
            }
        }
    ?>
</body>
</html>