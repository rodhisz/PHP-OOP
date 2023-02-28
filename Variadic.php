<?php
//1
// class Variadic
// {
//     public static function foo(int $number)
//     {
//         var_dump($number);
//     }
// }
// Variadic::foo(7, 'ini', 'tetap', 'masuk');

//2
// class Variadic
// {
//     public static function foo(int $number)
//     {
//         var_dump(func_get_args());
//     }
// }
// Variadic::foo(7, 'ini', 'tetap', 'masuk');

//3
// class Variadic
// {
//     public static function add(int ...$numbers)
//     {
//         return array_sum(›$numbers);
//     }
// }
// echo Variadic::add(7, 9, 5, 6);
// echo PHP_EOL;

//4
class Variadic
{
    public static function add(int ...$numbers)
    {
        return array_sum($numbers);
    }
}
$numbers = [7, 9, 5, 6];
echo Variadic::add(...$numbers);
echo PHP_EOL;
