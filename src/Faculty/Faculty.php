<?php

namespace App\Faculty;


use App\Administration\Administration;

class Faculty extends Administration
{
    public function hasFaculty(string $value)
    {
        return in_array($value, $this->faculty);
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