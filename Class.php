<?php
//class
class Mobil {
    //ini class
}

//class dengan function
class Mobil2
{
    public function jalan()
    {
        echo 'Mobil berjalan';
    }
}

//class dengan property
class Mobil3
{
    public $roda;
    public $pintu;

    public function jalan()
    {
        $pintu = 4; //variable lokal didalam OOP
        echo 'Mobil berjalan';
    }
}

$avanza = new Mobil3();
// $avanza->roda = 4;

// $hino = new Mobil3();
// $hino->roda=10;

// echo $hino->jalan();
// echo $hino->roda;
// echo PHP_EOL;

echo $avanza->jalan();
echo PHP_EOL;
echo $avanza->roda;
echo PHP_EOL;

class Koneksi
{
    public function connect($username, $password, 
    $host = 'localhost', $port = 3306)
    {
        echo "$username, $password, $host, $port";
    }
}

$database = new Koneksi();
$database->connect();


?>
