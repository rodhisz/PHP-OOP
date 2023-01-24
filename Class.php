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
    public function jalan()
    {
        echo 'Mobil berjalan';
    }
}

$avanza = new Mobil3();

$avanza->roda = 4;

echo $avanza->jalan();
echo PHP_EOL;
echo $avanza->roda;
echo PHP_EOL;

?>
