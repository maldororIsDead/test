<?php

namespace App\Department;

use App\Faculty\Faculty;
use InvalidArgumentException;

class Department extends Faculty implements DepartmentInterface
{
    protected $departments = [];

    public function hasDepartment(string $value)
    {
        if (!in_array($value, $this->departments)) {
            throw new InvalidArgumentException("Кафедры '{$value}' не существует");
        } else {
            return true;
        }
    }

    public function addDepartment(string $key, $value)
    {
        if ($this->hasFaculty($key)) {
            $container[$key] = $this->departments;
            array_push($this->departments, $value);
        } else {
            throw new InvalidArgumentException("Такого факультета не существует");
        }
    }

    public function getDepartments()
    {
        return $this->departments;
    }

    public function removeDepartment(string $value)
    {
        $key = array_search($value, $this->departments);
        array_splice($this->departments, $key, 1);
    }
}