<?php
class DatabaseConnection
{
    private string $host;
    private string $dbname;
    private string $user;
    private string $pass;

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
            $conn = new PDO($dsn, $this->user, $this->pass);
            $conn;
            throw new PDOException("Failed to connect");
        }
        catch (PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }
}