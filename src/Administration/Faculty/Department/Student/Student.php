<?php

namespace App\Administration\Faculty\Department\Student;

use InvalidArgumentException;
use App\Administration\Faculty\Department\Department;

class Student extends Department
{
    protected $students = [];
    private $container = [];

    public function addStudent(string $key, $value): void
    {
        if ($this->hasDepartment($key)) {
            $this->container[$key] = $this->students;
            $this->students[] = $value;
            return;
        }
        throw new InvalidArgumentException("Department `{$key}` does not exist");
    }

    public function getStudents(string $key): array
    {
        if ($this->hasDepartment($key)) {
            return $this->students;
        }
        throw new InvalidArgumentException("Department `{$key}` does not exist");
    }

    public function hasStudent(string $value): bool
    {
        if (!in_array($value, $this->students)) {
            throw new InvalidArgumentException("Such student '{$value}' does not exist");
        }
        return true;
    }

    public function removeStudent(string $value): void
    {
        if (!$this->hasStudent($value)) {
            return;
        }
        $key = array_search($value, $this->students);
        array_splice($this->students, $key, 1);
    }

}