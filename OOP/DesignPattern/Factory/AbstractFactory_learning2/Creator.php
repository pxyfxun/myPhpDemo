<?php
include_once('IProduct.php');

abstract class Creator
{
    protected abstract function factoryMedthod(IProduct $product);

    public function doFactory($product){
        $result=$this->factoryMedthod($product);
        return $result;
    }
}