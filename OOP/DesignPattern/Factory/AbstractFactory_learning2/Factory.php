<?php
include_once('Creator.php');
include_once('Product.php');

class Factory extends Creator
{
    private $product;
    public function factoryMedthod(IProduct $product)
    {
        $this->product=$product;
        return $this->product->getProperties();
    }
}