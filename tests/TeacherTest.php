<?php

namespace Tests;

use App\Teacher\Teacher;
use PHPUnit\Framework\TestCase;

class TeacherTest extends TestCase
{
    /** @test */

    function test_add_teacher()
    {
        $teacher = new Teacher;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $teacher->addFaculty($faculty);
        $teacher->addDepartment($faculty, $department);
        $teacher->addTeacher($department, $name);
        $this->assertSame(true, in_array($name, $teacher->getTeachers($department)));
    }

    /** @test */

    function test_has_teacher()
    {
        $teacher = new Teacher;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $teacher->addFaculty($faculty);
        $teacher->addDepartment($faculty, $department);
        $teacher->addTeacher($department, $name);
        $teacher->hasTeacher($name);
        $this->assertSame(true, in_array($name, $teacher->getTeachers($department)));
    }

    /** @test */

    function test_get_teachers()
    {
        $teacher = new Teacher;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $teacher->addFaculty($faculty);
        $teacher->addDepartment($faculty, $department);
        $teacher->addTeacher($department, $name);
        $this->assertInternalType('array', $teacher->getTeachers($department));
        $this->assertSame(true, in_array($name, $teacher->getTeachers($department)));
    }

    /** @test */

    function test_remove_teacher()
    {
        $teacher = new Teacher;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $teacher->addFaculty($faculty);
        $teacher->addDepartment($faculty, $department);
        $teacher->addTeacher($department, $name);
        $teacher->removeTeacher($name);
        $this->assertSame(false, in_array($name, $teacher->getTeachers($department)));
    }
}