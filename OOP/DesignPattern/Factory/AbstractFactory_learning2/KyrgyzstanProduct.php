<?php
class KyrgyzstanProduct implements IProduct
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct='this is mfgprofuct in KyrgyzstanProduct class';
        return $this->mfgProduct;
    }
}