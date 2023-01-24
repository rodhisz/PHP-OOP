<?php
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

// ########################

class Printer
{
    private $content;

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function cetak()
    {
        echo $this->content;
    }
}

$printer1 = new Printer();
$printer1->setContent('Aku printer satu');
$printer1->cetak();
echo PHP_EOL;
$printer2 = new Printer();
$printer2->setContent('Aku printer dua');
echo $printer2->cetak();
echo PHP_EOL;
$printer1->cetak();
echo PHP_EOL;

?>