<?php

namespace App\Administration\Faculty\Department;

use App\Administration\Faculty\Faculty;
use InvalidArgumentException;

class Department extends Faculty implements DepartmentInterface
{
    /* @var array */
    protected $departments = [];

    public function hasDepartment(string $value): bool
    {
        if (!in_array($value, $this->departments)) {
            throw new InvalidArgumentException("Department `{$value}` does not exist");
        }
        return true;
    }

    public function addDepartment(string $key, $value): void
    {
        if ($this->hasFaculty($key)) {
            $container[$key] = $this->departments;
            $this->departments[] = $value;
            return;
        }
        throw new InvalidArgumentException("Faculty `{$key}` does not exist");
    }

    public function getDepartments(): array
    {
        return $this->departments;
    }

    public function removeDepartment(string $value): void
    {
        if (!$this->hasDepartment($value)) {
            throw new InvalidArgumentException("Department `{$value}` does not exist");
        }
        $key = array_search($value, $this->departments);
        array_splice($this->departments, $key, 1);
    }
}