<!DOCTYPE html>
<html>
<head>
    <title>Inlogpagina</title>
    <?php
    require_once ('../OOP/Database.php');
    require_once ('../OOP/LayoutConventions.php');

    $getLayout = new LayoutConventions();
    ?>
</head>
<body>
    <?php $getLayout->getNavbarHead() ?>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Gebruiker</td>
                <td>
                    <input type="text" name="employee" />
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
                    <a href="register.php">Nieuwe gebruiker</a>
                </td>
            </tr>
        </table>
    </form>
    <?php $getLayout->getNavbarFoot() ?>
</body>
</html>

<?php
if (isset($_POST['login']))
{
    try
    {
        $employee = $_POST['employee'];
        $database = new Database('employees');
        if ($database->Login($employee, $_POST['password']))
        {
            echo $_SESSION['employee'] = $employee;
            unset($_SESSION['user']);
            header('Location: welcome.php');
        }
        else
        {
            echo 'ongeldig user id of wachtwoord<br/>';
            unset($_SESSION['employee']);
        }
    }

    catch (Exception $ex)
    {
        echo $ex->getMessage() . "<br/>";
    }
}
?>
