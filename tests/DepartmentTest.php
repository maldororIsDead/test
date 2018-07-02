<?php

namespace Tests;

use App\Department\Department;
use PHPUnit\Framework\TestCase;

class DepartmentTest extends TestCase
{
    /** @test */

    function test_add_department()
    {
        $department = new Department;
        $faculty = 'Машиностроительный';
        $value = 'ОМД';
        $department->addFaculty($faculty);
        $department->addDepartment($faculty, $value);
        $this->assertSame(true, in_array($value, $department->getDepartments()));
    }

    function test_has_department()
    {
        $department = new Department;
        $faculty = 'Машиностроительный';
        $value = 'ОМД';
        $department->addFaculty($faculty);
        $department->addDepartment($faculty, $value);
        $department->hasDepartment($value);
        $this->assertSame(true, in_array($value, $department->getDepartments()));
    }

    function test_get_departments()
    {
        $department = new Department;
        $faculty = 'Машиностроительный';
        $value = 'ОМД';
        $department->addFaculty($faculty);
        $department->addDepartment($faculty, $value);
        $this->assertInternalType('array', $department->getDepartments());
        $this->assertSame(true, in_array($value, $department->getDepartments()));
    }

    function test_remove_department()
    {
        $department = new Department;
        $faculty = 'Машиностроительный';
        $value = 'ОМД';
        $department->addFaculty($faculty);
        $department->addDepartment($faculty, $value);
        $department->removeDepartment($value);
        $this->assertSame(false, in_array($value, $department->getDepartments()));
    }
}