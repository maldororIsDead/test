<?php

namespace App\Administration\Faculty;

use App\Administration\Administration;
use InvalidArgumentException;

class Faculty extends Administration implements FacultyInterface
{
    protected $faculty = [];

    public function hasFaculty(string $value): bool
    {
        return in_array($value, $this->faculty);
    }

    public function addFaculty(string $value): void
    {
        if (in_array($value, $this->faculty)) {
            throw new InvalidArgumentException("Faculty '{$value}' has already exist");
        } else {
            $this->faculty[] = $value;
        }
    }

    public function getFaculties(): array
    {
        return $this->faculty;
    }

    public function removeFaculty(string $value): void
    {
        $key = array_search($value, $this->faculty);
        array_splice($this->faculty, $key, 1);
    }
}