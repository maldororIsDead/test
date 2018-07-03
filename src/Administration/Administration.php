<?php

namespace App\Administration;

class Administration implements AdministrationInterface
{
    protected $rector;

    public function hasRector(string $value)
    {
        return ($this->rector === $value) ? true : false;
    }

    public final function setRector(string $value)
    {
        $this->rector = $value;
    }

    public function getRector()
    {
        return $this->rector;
    }
}