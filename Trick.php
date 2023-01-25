<?php
class Connection3
{
    public function __destruct()
    {
        echo 'Object dihapus dari memory';
    }
}

$connection = new Connection3();
$connection->__destruct();
unset($connection);
echo PHP_EOL;

// $a = new \DateTimeImmutable();
// $b = $a->add(new \DateInterval('P1D'));
// echo $b->format('Y-m-d');
// echo PHP_EOL;
// echo $a->format('Y-m-d');
// echo PHP_EOL;


$a = new \DateTimeImmutable();
$b = $a->add(new \DateInterval('P1D'));
echo $b->format('Y-m-d');
echo PHP_EOL;
echo $a->format('Y-m-d');
echo PHP_EOL;
$a->__construct($b->format('Y-m-d'));
echo $a->format('Y-m-d');
echo PHP_EOL;

?>

