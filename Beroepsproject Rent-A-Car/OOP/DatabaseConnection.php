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
}