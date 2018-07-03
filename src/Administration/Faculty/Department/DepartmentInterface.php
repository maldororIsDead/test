<?php

namespace App\Administration\Faculty\Department;

interface DepartmentInterface
{
    public function hasDepartment(string $value): bool;

    public function addDepartment(string $key, $value): void;

    public function removeDepartment(string $value): void;
}