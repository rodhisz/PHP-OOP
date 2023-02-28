<?php

//1
// class FinalClass
// {
//     final public function finalMethod()
//     {
//         //
//     }
// }


//2
class FinalClass
{
    final public function finalMethod()
    {
    }
}
class ChildClass extends FinalClass
{
    public function finalMethod()
    {
        //
    }
}
