<?php

// interface HewanInterface
// {
//     public function getJenis();
// }

// class Kambing implements HewanInterface
// {
//     public function getJenis()
//     {
//         return 'Herbivora';
//     }
// }

// class Harimau implements HewanInterface
// {
//     public function getJenis()
//     {
//         return 'Karnivora';
//     }
// }

// class Singa implements HewanInterface
// {
//     public function getJenis()
//     {
//         return 'Karnivora';
//     }
// }

// ===============================================

// interface HewanInterface
// {
//     public function getJenis();
// }

// abstract class Hewan
// {
//     private $jenis;
//     public function setJenis($jenis)
//     {
//     $this->jenis = $jenis;
//     }
//     public function getJenis()
//     {
//     return $this->jenis;
//     }
// }

// class Kambing extends Hewan implements HewanInterface
// {
// }

// class Harimau extends Hewan implements HewanInterface
// {
// }

// class Singa extends Hewan implements HewanInterface
// {
// }

// $kambing = new Kambing();
// $kambing->setJenis('Herbivora');
// $harimau = new Harimau();
// $harimau->setJenis('Karnivora');
// $singa = new singa();
// $singa->setJenis('Karnivora');
// echo $kambing->getJenis();
// echo PHP_EOL;
// echo $harimau->getJenis();
// echo PHP_EOL;
// echo $singa->getJenis();
// echo PHP_EOL;

// ===============================================

interface HewanInterface
{
    public function getJenis();
}

interface MamaliaInterface
{
    public function menyusui();
}

abstract class Hewan
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

class Kambing extends Hewan implements HewanInterface, MamaliaInterface
{
    public function menyusui()
    {
        echo 'nyusu kambing';
    }
}

class Harimau extends Hewan implements HewanInterface, MamaliaInterface
{
    public function menyusui()
    {
        echo 'nyusu maung';
    }
}

class Singa extends Hewan implements HewanInterface, MamaliaInterface
{
    public function menyusui()
    {
        echo 'nyusu singa';
    }
}

