<?php
class Faktorial
{
    public static function nonRecursive(int $number)
    {
        $result = 1;
        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }

    public static function recursive(int $number)
    {
        if (2 > $number) {
            return $number;
        }
        return $number * self::recursive($number - 1);
    }
}

echo Faktorial::nonRecursive(5);
echo PHP_EOL;

echo Faktorial::recursive(5);
echo PHP_EOL;
