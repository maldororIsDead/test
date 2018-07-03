<?php

namespace App\Faculty;

interface FacultyInterface
{
    public function hasFaculty(string $value);
    public function addFaculty(string $key);
    public function getFaculties();
}