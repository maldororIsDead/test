<?php

namespace App\Administration;

interface AdministrationInterface
{
    public function hasRector(string $value);
    public function getRector();
}