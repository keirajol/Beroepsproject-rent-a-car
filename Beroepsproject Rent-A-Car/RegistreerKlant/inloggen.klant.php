<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inlogpagina</title>
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
    <form action="inloggen.klant.php" method="post">
        <table>
            <tr>
                <td>Gebruiker</td>
                <td>
                    <input type="text" name="user" />
                </td>
            </tr>
            <tr>
                <td>Wachtwoord</td>
                <td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="login" value="Login" />
                    <a href="registreren.klant.php">Nieuwe gebruiker</a>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    if (isset($_POST['login']))
                    {
                        try
                        {
                            $user = $_POST['user'];
                            if ($dbConnect->Login($user, $_POST['password']))
                            {
                                header("Location: message.newUser.php");
                                $_SESSION['user'] = $user;
                            }
                            else
                            {
                                echo 'ongeldig user id of wachtwoord<br/>';
                                unset( $_SESSION['user']);
                            }
                        }

                        catch (Exception $ex)
                        {
                            echo $ex->getMessage() . "<br/>";
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
    <?php
    $getLayout->getNavbarFoot();
    ?>
</body>
</html>
