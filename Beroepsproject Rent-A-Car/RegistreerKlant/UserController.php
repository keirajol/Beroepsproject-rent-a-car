<?php
require_once('../OOP/DatabaseConnection.php');
class UserController
{
    private string $table ="klanten";
    private string $user;

    public function login(string $user, $password) : bool
    {
        $this->validateUser($user);
        $this->validatePassword($password);
        return $this->checkPassword($user, $password);
    }


    private function validateUser(string $user)
    {
        if (strlen(trim($user)) == 0)
        {
            throw new Exception('Geef een usernaam op');
        }
    }

    private function validatePassword(string $password)
    {
        if (strlen(trim($password)) == 0)
        {
            throw new Exception('Geef een wachtwoord op');
        }
    }

    // password controller
    private function checkPassword(string $password) : bool
    {
        $statement = $this->connection->Prepare
                ("select wachtwoord from $this->table where wachtwoord = :password");
        $statement->execute([
              ':password' => $password
            ]);
        $result = $statement->fetch();
        return $result != null && password_verify($password,$result['password']);
    }

    private function validateRepeatedPassword(string $password,string $repeatedPassword)
    {
        if (trim($password) != trim($repeatedPassword))
        {
            throw new Exception('Wachtwoorden moeten hetzelfde zijn');
        }
    }

    private function checkIfUserExists()
    {
        $statement =
          $this->connection->Prepare("select gebruikersnaam from $this->table like $this->user = :username");
        $statement->execute([":username" => $this->user]);
        if ($statement->fetch() == 1)
        {
            throw new Exception("User $this->user bestaat al!");
        }
    }

    public function createUser(string $user, string $password, string $repeatedPassword, string $email)
    {
        $this->user = $user;
        $this->validateUser($this->user);
        $this->validatePassword($password);
        $this->validateRepeatedPassword($password, $repeatedPassword);
        $this->checkIfUserExists();

        $statement = $this->connection->Prepare("insert into $this->table (gebruikersnaam, wachtwoord, email) values (:name, :password, :email)");
        $statement->execute(
            [
                ':name' => $this->user,
                ':password' => $password,
                ':email' => $email
            ]);
    }
}