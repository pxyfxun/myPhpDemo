<?php
include_once 'DollarCalc.php';
include_once 'EuroAdapter.php';

class Client
{
    public function __construct(){
        $product=50;
        $service=40;

        echo '$'.$this->requestDollar($product,$service).'<br/>';
        echo '&#8364;'.$this->requestEuro($product,$service).'<br/>';
    }

    public function requestDollar($product,$service){
        $dollar=new DollarCalc();
        return $dollar->requestCalc($product,$service);
    }
   
    public function requestEuro($product,$service){
        $euro=new EuroAdapter();
        return $euro->requestCalc($product,$service);
    }
}

$work=new Client();
