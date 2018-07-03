<?php

namespace App\Administration;

interface AdministrationInterface
{
    public function isRector(string $value): int;

    public function getRector(): string;
}