<?php
// filename: Http/OtherClass.php
namespace Http;

class OtherClass
{
    private $request;
    public function __construct()
    {
        $this->request = new Request();
    }
}
