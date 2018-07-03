<?php

namespace Tests;

use App\Administration\Faculty\Department\Department;
use PHPUnit\Framework\TestCase;

class DepartmentTest extends TestCase
{
    /** @test */

    public function test_add_department()
    {
        $department = new Department;
        $faculty = 'Машиностроительный';
        $value = 'ОМД';
        $department->addFaculty($faculty);
        $department->addDepartment($faculty, $value);
        $this->assertTrue(in_array($value, $department->getDepartments()));
    }

    /** @test */

    public function test_has_department()
    {
        $department = new Department;
        $faculty = 'Машиностроительный';
        $value = 'ОМД';
        $department->addFaculty($faculty);
        $department->addDepartment($faculty, $value);
        $department->hasDepartment($value);
        $this->assertTrue(in_array($value, $department->getDepartments()));
    }

    /** @test */

    public function test_get_departments()
    {
        $department = new Department;
        $faculty = 'Машиностроительный';
        $value = 'ОМД';
        $department->addFaculty($faculty);
        $department->addDepartment($faculty, $value);
        $this->assertInternalType('array', $department->getDepartments());
        $this->assertTrue(in_array($value, $department->getDepartments()));
    }

    /** @test */

    public function test_remove_department()
    {
        $department = new Department;
        $faculty = 'Машиностроительный';
        $value = 'ОМД';
        $department->addFaculty($faculty);
        $department->addDepartment($faculty, $value);
        $department->removeDepartment($value);
        $this->assertFalse(in_array($value, $department->getDepartments()));
    }
}