<?php

namespace App\Teacher;

use App\Department\Department;
use InvalidArgumentException;

class Teacher extends Department
{
    protected $teachers = [];
    private $container = [];

    public function addTeacher(string $key, $value)
    {
        if ($this->hasDepartment($key)) {
            $this->container[$key] = $this->teachers;
            array_push($this->teachers, $value);
        } else {
            throw new InvalidArgumentException("Такой кафедры не существует");
        }
    }

    public function getTeachers(string $key)
    {
        if ($this->hasDepartment($key)) {
            return $this->teachers;
        } else {
            throw new InvalidArgumentException("Такой кафедры не существует");
        }
    }

    public function hasTeacher(string $value)
    {
        if (!in_array($value, $this->teachers)) {
            throw new InvalidArgumentException("Такого студента '{$value}' не существует");
        } else {
            return true;
        }
    }

    public function removeTeacher(string $value)
    {
        $key = array_search($value, $this->teachers);
        array_splice($this->teachers, $key, 1);
    }
}