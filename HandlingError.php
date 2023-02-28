<?php
// class Connection
// {
//     public function connect()
//     {
//         throw new RuntimeException('Anda harus mengimplementasikan 
//         method connect() sesuai dengan database driver 
//         yang Anda gunakan.');
//     }
// }


// class Errorable
// {
// public static function calculate(int $number)
// {
// return ($number % 0); //Bila menggunakan $number / 0 maka hanya akan memunculkan _warning_ bukan _error_
// }
// }
// Errorable::calculate(7);
// echo 'Ini tidak dieksekusi';
// echo PHP_EOL;

// class Errorable
// {
//     public static function calculate(int $number)
//     {
//         return ($number % 0);
//     }
// }
// try {
//     Errorable::calculate(7);
// } catch (DivisionByZeroError $e) {
//     echo $e->getMessage();
//     echo PHP_EOL;
// }
// echo 'Ini tetap dieksekusi';
// echo PHP_EOL;

// class Connection
// {
//     public function connect()
//     {
//         throw new RuntimeException('Anda harus mengimplement
//         asikan method connect() sesuai dengan database driver yang Anda gunakan.');
//     }
// }
// try {
//     $connection = new Connection();
//     $connection->connect();
// } catch (RuntimeException $e) {
//     echo $e->getMessage();
//     echo PHP_EOL;
// }
// echo 'Ini tetap dieksekusi';
// echo PHP_EOL;


// class Errorable
// {
//     public static function calculate(int $number)
//     {
//         return ($number % 0);
//     }
// }
// try {
//     Errorable::calculate(7);
// } catch (Exception $e) {
//     echo 'Tidak masuk kesini';
//     echo PHP_EOL;
// } catch (DivisionByZeroError $e) {
//     echo $e->getMessage();
//     echo PHP_EOL;
// }

class Errorable
{
    public static function calculate(int $number)
    {
        return ($number % 0);
    }
}
try {
    Errorable::calculate(7);
} catch (Exception $e) {
    echo 'Tidak masuk kesini';
    echo PHP_EOL;
} finally {
    echo 'Apapun yang terjadi, ini harus tetap dieksekusi';
    echo PHP_EOL;
}
