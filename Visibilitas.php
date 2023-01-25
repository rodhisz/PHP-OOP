<?php
// class Mobil
// {
//     private $roda = 4;
//     private function jalan()
//     {
//         echo 'Mobil berjalan';
//     }
// }

// $avanza = new Mobil();
// echo $avanza->jalan();
// echo PHP_EOL;
// echo $avanza->roda;
// echo PHP_EOL;


// class Mobil
// {
//     public $roda = 4;

//     private function jalan()
//     {
//         echo 'Mobil berjalan';
//     }

//     public function jumlahRoda()
//     {
//         echo $this->roda;
//     }
// }

// $avanza = new Mobil();
// echo $avanza->jumlahRoda();
// echo PHP_EOL;

use Mobil as GlobalMobil;

class Mobil
{
    private $roda = 4;

    private function jalan()
    {
        echo 'Mobil berjalan';
    }

    protected function jumlahRoda()
    {
        echo $this->roda;
    }
}
//=========================== 
// $avanza = new Mobil();
// echo $avanza->roda();
// echo PHP_EOL;
// echo $avanza->jalan();
// echo PHP_EOL;
// echo $avanza->jumlahRoda();
// echo PHP_EOL;

class Motor extends GlobalMobil
{
    public function Body(){
        echo $this->jumlahRoda();
    }
}

$Honda = new Motor();
echo $Honda->Body()

// class Mobil
// {
//     private $roda = 4;

//     public function jumlahRoda()
//     {
//         echo $this->roda;
//     }
// }
// $avanza = new Mobil();
// echo $avanza->jumlahRoda();
// echo PHP_EOL;

// class Singa
// {
//     public static $KAKI = 4;

//     public static function lari()
//     {
//         echo 'Singa berlari';
//     }
// }
// echo Singa::$KAKI;
// echo PHP_EOL;
// echo Singa::lari();
// echo PHP_EOL;

?>