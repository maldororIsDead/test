<?php

namespace App\Administration;

use InvalidArgumentException;

class Administration implements AdministrationInterface
{
    protected $rector;
    protected $faculty = [];

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

    public function addFaculty(string $value)
    {
        if (in_array($value, $this->faculty)) {
            throw new InvalidArgumentException("Факультет '{$value}' уже существует");
        } else {
            array_push($this->faculty, $value);
        }
    }

}