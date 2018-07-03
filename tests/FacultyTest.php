<?php

namespace Tests;

use App\Faculty\Faculty;
use PHPUnit\Framework\TestCase;

class FacultyTest extends TestCase
{
    /** @test */

    function test_add_faculty()
    {
        $faculty = new Faculty;
        $faculty->addFaculty('Машиностроительный');
        $this->assertSame(true, in_array('Машиностроительный', $faculty->getFaculties()));
    }

    /** @test */

    function test_get_faculties()
    {
        $faculty = new Faculty;
        $faculty->addFaculty('Машиностроительный');
        $faculty->addFaculty('Автоматизации и ифнормационных технологий');
        $this->assertInternalType('array', $faculty->getFaculties());
        $this->assertSame(true, in_array('Машиностроительный', $faculty->getFaculties()));
        $this->assertSame(true, in_array('Автоматизации и ифнормационных технологий', $faculty->getFaculties()));
    }

    /** @test */

    function test_remove_faculty()
    {
        $faculty = new Faculty;
        $faculty->addFaculty('Машиностроительный');
        $faculty->removeFaculty('Машиностроительный');
        $this->assertSame(false, in_array('Машиностроительный', $faculty->getFaculties()));
    }

}