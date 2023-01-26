<?php

class Hewan
{
    private $jenis;

    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function getJenis()
    {
        return $this->jenis;
    }
}

class Kambing extends Hewan
{
}
class Harimau extends Hewan
{
}
class Singa extends Hewan
{
}

$kambing = new Kambing();
$kambing->setJenis('Herbivora');
$harimau = new Harimau();
$harimau->setJenis('Karnivora');
$singa = new singa();
$singa->setJenis('Karnivora');
echo $kambing->getJenis();
echo PHP_EOL;
echo $harimau->getJenis();
echo PHP_EOL;
echo $singa->getJenis();
echo PHP_EOL;

//####################################

// class Hewan2
// {
//     private $jenis;

//     public function setJenis($jenis)
//     {
//         $this->jenis = $jenis;
//     }

//     public function getJenis()
//     {
//         return $this->jenis;
//     }
// }

// class Mamalia
// {
//     public function menyusui()
//     {
//         echo 'mik susu aaahhh';
//     }
// }
// class Kambing extends Hewan2, Mamalia
// {
//     //
// }

// $kambing = new Kambing();

//####################################

class Hewan
{
    private $jenis;

    public function setJenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function getJenis()
    {
        return $this->jenis;
    }
}

class Mamalia extends Hewan
{
    public function menyusui()
    {
        echo 'mik susu aaahhh';
    }
}

class Kambing extends Mamalia
{
}

$kambing = new Kambing();
$kambing->menyusui();
echo PHP_EOL;

?>
