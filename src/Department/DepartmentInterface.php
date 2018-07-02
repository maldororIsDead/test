<?php

namespace App\Department;

interface DepartmentInterface
{
    public function hasDepartment(string $value);
    public function addDepartment(string $key, $value);
    public function removeDepartment(string $value);
}