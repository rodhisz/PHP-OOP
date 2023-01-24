<?php

// class Lingkaran
// {
//     const PI = 3.14;

//     public function luas($jari)
//     {
//         echo self::PI * $jari * $jari;
//     }
// }
// $lingkaran = new Lingkaran();
// $lingkaran->luas(7);
// echo PHP_EOL;

class Lingkaran
{
    const PI = 3.14;
    public function luas($jari)
    {
        return self::PI * $jari * $jari;
    }
}
$lingkaran = new Lingkaran();
echo $lingkaran->luas(7);
echo PHP_EOL;

class Lingkaran_cara_penggunaan
{
    const PI = 3.14;
    public function luas($jari)
    {
        return self::PI * $jari * $jari;
    }
}
$lingkaran = new Lingkaran();
$luas = $lingkaran->luas(7);
echo $luas;
echo PHP_EOL;
?>
