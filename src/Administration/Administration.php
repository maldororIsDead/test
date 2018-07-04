<?php

namespace App\Administration;

class Administration implements AdministrationInterface
{
    /* @var string */
    protected $rector;

    public function isRector(string $name): int
    {
        return strcasecmp(mb_strtoupper($this->rector), mb_strtoupper($name));
    }

    public function setRector(string $name): void
    {
        $this->rector = $name;
    }

    public function getRector(): string
    {
        return $this->rector;
    }
}