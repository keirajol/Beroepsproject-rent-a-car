<?php
class DatabaseConnection
{
    private string $host;
    private string $dbname;
    private string $user;
    private string $pass;

    private string $table = 'klanten';
    private PDO $connection;

    public function __construct(string $host, string $dbname, string $user, string $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        try
        {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $this->connection = new PDO($dsn, $this->user, $this->pass);
        }
        catch (PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }

    public function Login(string $user, string $password) : bool
    {
        $this->ValidateUser($user);
        $this->ValidatePassword($password);
        return $this->CheckPassword($user, $password);
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

    private function checkPassword(string $user, string $password) : bool
    {
        $statement = $this->connection->Prepare
                ("select $password from $this->table where $user like :gebruikersnaam");
        $statement->execute(
            [
              ":gebruikersnaam" => $user
            ]);
        $result = $statement->fetch();
        return $result != null && password_verify($password,$result['password']);
    }

    private function validateRepeatedPassword(string $password, string $repeatedPassword)
    {
        if (trim($password) != trim($repeatedPassword))
        {
            throw new Exception('Wachtwoorden moeten hetzelfde zijn');
        }
    }

    private function checkIfUserExists(string $user)
    {
        $statement = $this->connection->Prepare("select * from $this->table where gebruikersnaam = :gebruikersnaam");
        $statement->execute([":gebruikersnaam" => $user]);
        if ($statement->fetch() == 1)
        {
            throw new Exception("Gebruiker $user bestaat al!");
        }
    }

    public function createUser(string $user, string $email, string $password, string $repeatedPassword)
    {
        $this->validateUser($user);
        $this->validatePassword($user);
        $this->validateRepeatedPassword($password, $repeatedPassword);
        $this->checkIfUserExists($user);

        $statement = $this->connection->Prepare(
        "INSERT INTO $this->table (gebruikersnaam, email, wachtwoord) values (:gebruikersnaam, :email, :wachtwoord)");
        $statement->execute(
            [
                ":gebruikersnaam" => trim($user),
                ":email" => trim($email),
                ":wachtwoord" => password_hash(trim($password), PASSWORD_DEFAULT)
            ]);
        header("Location: ../RegistreerKlant/inloggen.klant.php");
    }
}