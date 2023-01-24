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
//     private $roda = 4;

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

// class Mobil
// {
//     private $roda = 4;

//     protected function jalan()
//     {
//         echo 'Mobil berjalan';
//     }

//     public function jumlahRoda()
//     {
//         echo $this->roda;
//     }
// }

// $avanza = new Mobil();
// echo $avanza->jalan();
// echo PHP_EOL;

class Mobil
{
    private $roda = 4;

    public function jumlahRoda()
    {
        echo $this->roda;
    }
}
$avanza = new Mobil();
echo $avanza->jumlahRoda();
echo PHP_EOL;

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