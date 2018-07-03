<?php

namespace App\Faculty;


use App\Administration\Administration;
use InvalidArgumentException;

class Faculty extends Administration implements FacultyInterface
{
    protected $faculty = [];

    public function hasFaculty(string $value)
    {
        return in_array($value, $this->faculty);
    }

    public function addFaculty(string $value)
    {
        if (in_array($value, $this->faculty)) {
            throw new InvalidArgumentException("Факультет '{$value}' уже существует");
        } else {
            array_push($this->faculty, $value);
        }
    }

    public function getFaculties()
    {
        return $this->faculty;
    }

    public final function removeFaculty(string $value)
    {
        $key = array_search($value, $this->faculty);
        array_splice($this->faculty, $key, 1);
    }
}