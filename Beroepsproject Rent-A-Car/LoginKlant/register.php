<?php
require_once ('../OOP/Database.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nieuwe gebruiker maken</title>
</head>
<body>
    <form action="register.php" method="post">
        <table>
            <tr>
                <td>Gebruiker</td>
                <td>
                    <input type="text" name="user" />
                </td>
            </tr>
            <tr>
                <td>Volledige naam</td>
                <td>
                    <input type="text" name="userName" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" />
                </td>
            </tr>
            <tr>
                <td>Wachtwoord</td>
                <td>
                    <input type="password" name="password" />
                </td>
            </tr>
            <tr>
                <td>Herhaal wachtwoord</td>
                <td>
                    <input type="password" name="repeatedPassword" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="newUser" value="Opslaan" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['newUser']))
{
    try
    {
        $loginController = new Database();
        $loginController->CreateUser($_POST['user'], $_POST['password'], $_POST['repeatedPassword'], $_POST['userName'], $_POST['email']);
        header('Location: login.php');
    }
    catch (Exception $ex)
    {
        echo $ex->getMessage() . "<br />";
    }
}
?>
