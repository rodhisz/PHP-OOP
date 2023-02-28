<?php
//1
// class A
// {
//     public static function foo()
//     {
//         echo 'foo';
//     }
// }
// A::foo();

//2
// class A
// {
//     public function bar()
//     {
//         echo 'bar';
//     }
//     public static function foo()
//     {
//         echo 'foo';
//         //saya ingin memanggil _method_ `bar()` disini
//     }
// }
// A::foo();

//3
// class A
// {
//     public function bar()
//     {
//         echo 'bar';
//     }
//     public static function foo()
//     {
//         echo 'foo';
//         (new A())->bar();
//     }
// }
// A::foo();

//4
// class A
// {
//     public function bar()
//     {
//         echo 'bar';
//     }
//     public static function foo()
//     {
//         echo 'foo';
//         (new self())->bar();
//     }
// }
// A::foo();

//5
// class A
// {
//     public function bar()
//     {
//         echo 'bar';
//     }
//     public static function foo()
//     {
//         echo 'foo';
//         (new static())->bar();
//     }
// }
// A::foo();

//6
class A
{
    public function bar()
    {
        echo 'bar';
    }
    public static function foo()
    {
        echo 'foo';
        static::bar();
    }
}
A::foo();
