<?php

namespace Tests;

use App\Student\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    /** @test */

    function test_add_student()
    {
        $student = new Student;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $student->addFaculty($faculty);
        $student->addDepartment($faculty, $department);
        $student->addStudent($department, $name);
        $this->assertSame(true, in_array($name, $student->getStudents($department)));
    }

    function test_has_student()
    {
        $student = new Student;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $student->addFaculty($faculty);
        $student->addDepartment($faculty, $department);
        $student->addStudent($department, $name);
        $student->hasStudent($name);
        $this->assertSame(true, in_array($name, $student->getStudents($department)));
    }

    function test_get_students()
    {
        $student = new Student;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $student->addFaculty($faculty);
        $student->addDepartment($faculty, $department);
        $student->addStudent($department, $name);
        $this->assertInternalType('array', $student->getStudents($department));
        $this->assertSame(true, in_array($name, $student->getStudents($department)));
    }

    function test_remove_student()
    {
        $student = new Student;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $student->addFaculty($faculty);
        $student->addDepartment($faculty, $department);
        $student->addStudent($department, $name);
        $student->removeStudent($name);
        $this->assertSame(false, in_array($name, $student->getStudents($department)));
    }
}