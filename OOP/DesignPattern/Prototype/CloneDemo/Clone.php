<?php
//Clone.php

abstract class CloneMe
{
    public $name;

    public $picture;

    abstract function __clone();
}

class Person extends CloneMe
{
    public function __construct()
    {
        $this->picture='cloneMan.jpg';
        $this->name='Original';
    }

    public function display()
    {
        echo "<img src='{$this->picture}'/>";
        echo "<br/> {$this->name}";
    }

    function __clone(){}
}

$worker=new Person();
$worker->display();

echo "<br/>";
$slacker=clone $worker;
$slacker->name='Cloned';
$slacker->display();
