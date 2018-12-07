<?php
class HelloMan
{
    private $controller;
    function __construct()
    {
        echo "Hello,clone <br/>";
        $this->controller='Constructor creation <br/>';
    }

    public function work()
    {
        echo $this->controller;
        echo 'I am doing the work!<br/>';
    }
}

$hello=new HelloMan();
$hello->work();
 

$cloned=clone $hello;
$cloned->work();