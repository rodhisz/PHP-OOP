<?php
class Singa
{
    public static $KAKI = 4;

    public static function kaki1()
    {
        echo Singa::$KAKI;
    }

    public function kaki2()
    {
        echo self::$KAKI;
    }

    public function kaki3()
    {
        echo static::$KAKI;
    }
}
// $singa = new Singa();
// echo $singa->kaki1();
// echo PHP_EOL;
// echo $singa->kaki2();
// echo PHP_EOL;
// echo $singa->kaki3();
// echo PHP_EOL;

$tes = Singa::$KAKI;
echo $tes;
echo PHP_EOL;

Singa::kaki1();
echo PHP_EOL;

class Lingkaran
{
    public const PI = 3.14;

    public function luas($jari)
    {
        echo self::PI * $jari * $jari;
    }
}

$lingkaran = new Lingkaran();
echo Lingkaran::PI;
echo PHP_EOL;
$lingkaran->luas(7);
echo PHP_EOL;

?>