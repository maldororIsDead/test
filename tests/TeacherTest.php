<?php

namespace Tests;

use App\Administration\Faculty\Department\Teacher\Teacher;
use PHPUnit\Framework\TestCase;

class TeacherTest extends TestCase
{
    /** @test */

    public function test_add_teacher()
    {
        $teacher = new Teacher;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $teacher->addFaculty($faculty);
        $teacher->addDepartment($faculty, $department);
        $teacher->addTeacher($department, $name);
        $this->assertTrue(in_array($name, $teacher->getTeachers($department)));
    }

    /** @test */

    public function test_has_teacher()
    {
        $teacher = new Teacher;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $teacher->addFaculty($faculty);
        $teacher->addDepartment($faculty, $department);
        $teacher->addTeacher($department, $name);
        $teacher->hasTeacher($name);
        $this->assertTrue(in_array($name, $teacher->getTeachers($department)));
    }

    /** @test */

    public function test_get_teachers()
    {
        $teacher = new Teacher;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $teacher->addFaculty($faculty);
        $teacher->addDepartment($faculty, $department);
        $teacher->addTeacher($department, $name);
        $this->assertInternalType('array', $teacher->getTeachers($department));
        $this->assertTrue(in_array($name, $teacher->getTeachers($department)));
    }

    /** @test */

    public function test_remove_teacher()
    {
        $teacher = new Teacher;
        $faculty = 'Машиностроительный';
        $department = 'ОМД';
        $name = 'Дмитрий';
        $teacher->addFaculty($faculty);
        $teacher->addDepartment($faculty, $department);
        $teacher->addTeacher($department, $name);
        $teacher->removeTeacher($name);
        $this->assertFalse(in_array($name, $teacher->getTeachers($department)));
    }
}