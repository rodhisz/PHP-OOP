<?php

class Connection
{
    private $host;
    private $port;
    private $username;
    private $password;
    private $database;

    public function __construct($username, $password, 
    $database, $host = 'localhost', $port = 3306)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function getConnection()
    {
        return new PDO(sprintf('mysql:host=%s;port=%d;dbname=%s', $this->host, 
        $this->port, $this->database), $this->username, $this->password);
    }
}

class MobilGede
{
    public $roda = 4;

    protected function roda()
    {
        return $this->roda + 2;
    }
    
    public function getRoda()
    {
        return $this->roda();
    }
}

$pajero = new MobilGede();
echo $pajero->getRoda();

$pajero->roda = 10;
echo PHP_EOL;
echo $pajero->getRoda();
?>
