<?php

namespace App\Administration\Faculty;

interface FacultyInterface
{
    public function hasFaculty(string $value): bool;

    public function addFaculty(string $key): void;

    public function getFaculties(): array;
}