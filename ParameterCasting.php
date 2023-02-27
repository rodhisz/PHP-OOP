<?php
// class ParameterCasting
// {
//     public function __construct(array $arrayType)
//     {
//         //
//     }
//     public function stringCast(string $stringType)
//     {
//         //
//     }
//     public function intCast(int $intType)
//     {
//         //
//     }
//     public function floatCast(float $floatType)
//     {
//         //
//     }
//     public function booleanCast(bool $booleanType)
//     {
//         //
//     }
// }


// class ParameterCasting
// {
//     public function __construct(array $arrayType)
//     {
//     }
//     public function stringCast(string $stringType)
//     {
//     }
//     public function intCast(int $intType)
//     {
//     }
//     public function floatCast(float $floatType)
//     {
//     }
//     public function booleanCast(bool $booleanType)
//     {
//     }
// }
// $object = new ParameterCasting(array());
// $object->floatCast(1);
// $object->intCast(1.0);


declare(strict_types=1);
class ParameterCasting
{
    public function __construct(array $arrayType)
    {
    }
    public function stringCast(string $stringType)
    {
    }
    public function intCast(int $intType)
    {
        var_dump($intType);
    }
    public function floatCast(float $floatType)
    {
        var_dump($floatType);
    }
    public function booleanCast(bool $booleanType)
    {
    }
}
$object = new ParameterCasting(array());
$object->floatCast(1);
$object->intCast(1);
