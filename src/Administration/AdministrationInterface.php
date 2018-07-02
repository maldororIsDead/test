<?php

namespace App\Administration;

interface AdministrationInterface
{
    public function hasRector(string $value);
    public function setRector(string $value);
    public function getRector();
    public function addFaculty(string $value);
}