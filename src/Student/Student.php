<?php

namespace App\Student;

use InvalidArgumentException;
use App\Department\Department;

class Student extends Department
{
    protected $students = [];
    private $container = [];

    public function addStudent(string $key, $value)
    {
        if ($this->hasDepartment($key)) {
            $this->container[$key] = $this->students;
            array_push($this->students, $value);
        } else {
            throw new InvalidArgumentException("Такой кафедры не существует");
        }
    }

    public function getStudents(string $key)
    {
        if ($this->hasDepartment($key)) {
            return $this->students;
        } else {
            throw new InvalidArgumentException("Такой кафедры не существует");
        }
    }

    public function hasStudent(string $value)
    {
        if (!in_array($value, $this->students)) {
            throw new InvalidArgumentException("Такого студента '{$value}' не существует");
        } else {
            return true;
        }
    }

    public function getStudentCount() {
        return count($this->students);
    }

    public function removeStudent(string $value)
    {
        $key = array_search($value, $this->students);
        array_splice($this->students, $key, 1);
    }

}