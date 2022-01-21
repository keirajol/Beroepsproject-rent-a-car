<?php
class Database
{
    private PDO $connection;
    private string $table;
    private string $user;

    public function __construct($table = "")
    {
        $server = 'localhost';
        $database = 'netland';
        $user = 'root';
        $password = '';

        $this->table = $table;

        $this->connection = new PDO("mysql:server=$server;dbname=$database", $user, $password);
        session_start();
    }

    public function Login(string $user, $password) : bool
    {
        $this->ValidateUser($user);
        $this->ValidatePassword($password);
        return $this->CheckPassword($user, $password);
    }

    private function ValidateUser(string $user)
    {
        if (strlen(trim($user)) == 0)
        {
            throw new Exception('Geef een usernaam op');
        }
    }

    private function ValidatePassword(string $password)
    {
        if (strlen(trim($password)) == 0)
        {
            throw new Exception('Geef een wachtwoord op');
        }
    }

    private function CheckPassword(string $user, string $password) : bool
    {
        $statement = $this->connection->Prepare
                ("select password from $this->table where id like :id");
        $statement->execute([
              ":id" => $user
            ]);
        $result = $statement->fetch();
        return $result != null && password_verify($password, $result['password']);
    }

    private function ValidateRepeatedPassword(string $password,
                                          string $repeatedPassword)
    {
        if (trim($password) != trim($repeatedPassword))
        {
            throw new Exception('Wachtwoorden moeten hetzelfde zijn');
        }
    }

    private function CheckIfUserExists(string $user)
    {
        $statement = $this->connection->Prepare("select id from $this->table where id = :id");
        $statement->execute([":id" => $user]);
        if ($statement->fetch() == 1)
        {
            throw new Exception("User $user bestaat al!");
        }
    }

    public function CreateUser(string $user, string $password, string $repeatedPassword, string $fullName, string $email)
    {
        $this->ValidateUser($user);
        $this->ValidatePassword($user);
        $this->ValidateRepeatedPassword($password, $repeatedPassword);
        $this->CheckIfUserExists($user);

        $statement = $this->connection->Prepare(
        "INSERT INTO $this->table (id, password, name, email) values (:id, :password, :name, :email)");
        $statement->execute(
            [":id" => trim($user),
             ":password" => password_hash(trim($password), PASSWORD_DEFAULT),
             ":name" => trim($fullName),
             ":email" => trim($email)
             ]);
    }

    public function getCarTable()
    {
        $statement = $this->connection->prepare(
            "SELECT * FROM $this->table"
            );
        $statement->execute();
        while($row = $statement->fetch())
        {
            echo "<div class='auto-blokken'>
                    <div class='car-1'>
                        <h2>" . $row['year_of_production'] . " " . $row['brand'] . " " . $row['model'] . "</h2>
                        <img src=" . $row['image'] . " alt='FOTO' id='bmw_pic' class='cars'>
                        <p class='informatie'>" . "&euro;" . $row['price_per_day'] . ",- per dag<br></p>

                        <a href=ReserveringAuto.php?id=" . $row['id'] . " class='reserveren' type='button'>Reserveer hier</a>
                    </div>
                </div>"
            ;
        }
    }

    public function getUserReservation(string $idCustomer,  string $table, $id)
    {
        $statement = $this->connection->prepare(
            "SELECT * FROM $table WHERE id = :id"
            );
        $statement->execute([
            ':id' => $id
            ]);
        while($row = $statement->fetch())
        {
            echo "
            <div>
                <h2>" . $row['year_of_production'] . " " . $row['brand'] . " " . $row['model'] . "</h2>
                <img src=" . $row['image'] . " alt='BMW-FOTO' id='bmw_pic' class='cars'>
                <p class='informatie'>" . "&euro;" . $row['price_per_day'] . ",- per dag<br></p>
                " . $row['amount'] . " Beshikbaar
            </div>";

            $statement = $this->connection->prepare(
            "SELECT name, email FROM $this->table WHERE id = :id"
            );
            $statement->execute([
                ':id' => $idCustomer
                ]);
            while($row = $statement->fetch())
            {
                echo '<form action="ReserveringAuto.php" method ="POST">
                        <input type="text" name="Name" placeholder="Naam" value=' . $row['name'] . ' required="required"><br><br>
                        <input type="email" name="Email" placeholder="Email" value=' . $row['email'] . ' required="required"><br><br>

                        <input type="submit" value="Reserveer">
                    </form>';

                if (isset($_POST['submit']))
                {
                    if (isset($_POST['Name'], $_POST['Email']))
                    {
                        header('Location: Bon.php');
                    }
                }
            }
        }
    }
}