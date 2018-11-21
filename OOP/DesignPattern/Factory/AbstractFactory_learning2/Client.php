<?php
include_once('Factory.php');
include_once('KyrgyzstanProduct');
class Client
{
    private $factory;
    function __construct()
    {
        $this->factory=new Factory();
        echo $this->factory->doFactory(new KyrgyzstanProduct());
    }
}

$work=new Client();