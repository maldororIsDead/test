<?php

namespace App\Administration\Faculty\Department\Teacher;

use App\Administration\Faculty\Department\Department;
use InvalidArgumentException;

class Teacher extends Department
{
    /* @var array */
    protected $teachers = [];

    /* @var array */
    private $container = [];

    public function addTeacher(string $key, $value): void
    {
        if ($this->hasDepartment($key)) {
            $this->container[$key] = $this->teachers;
            $this->teachers[] = $value;
            return;
        }
        throw new InvalidArgumentException("Department `{$key}` does not exist");
    }

    public function getTeachers(string $key): array
    {
        if ($this->hasDepartment($key)) {
            return $this->teachers;
        }
        throw new InvalidArgumentException("Department `{$key}` does not exist");
    }

    public function hasTeacher(string $value): bool
    {
        if (!in_array($value, $this->teachers)) {
            throw new InvalidArgumentException("Such teacher '{$value}' does not exist");
        }
        return true;
    }

    public function removeTeacher(string $value): void
    {
        if (!$this->hasTeacher($value)) {
            return;
        }
        $key = array_search($value, $this->teachers);
        array_splice($this->teachers, $key, 1);
    }
}