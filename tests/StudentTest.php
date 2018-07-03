<?php

namespace Tests;

use App\Administration\Faculty\Department\Student\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    /** @test */

    public function test_add_student()
    {
        $student = new Student;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $student->addFaculty($faculty);
        $student->addDepartment($faculty, $department);
        $student->addStudent($department, $name);
        $this->assertTrue(in_array($name, $student->getStudents($department)));
    }

    /** @test */

    public function test_has_student()
    {
        $student = new Student;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $student->addFaculty($faculty);
        $student->addDepartment($faculty, $department);
        $student->addStudent($department, $name);
        $student->hasStudent($name);
        $this->assertTrue(in_array($name, $student->getStudents($department)));
    }

    /** @test */

    public function test_get_students()
    {
        $student = new Student;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $student->addFaculty($faculty);
        $student->addDepartment($faculty, $department);
        $student->addStudent($department, $name);
        $this->assertInternalType('array', $student->getStudents($department));
        $this->assertTrue(in_array($name, $student->getStudents($department)));
    }

    /** @test */

    public function test_remove_student()
    {
        $student = new Student;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $student->addFaculty($faculty);
        $student->addDepartment($faculty, $department);
        $student->addStudent($department, $name);
        $student->removeStudent($name);
        $this->assertFalse(in_array($name, $student->getStudents($department)));
    }
}