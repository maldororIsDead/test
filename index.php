<?php

require __DIR__ . '/vendor/autoload.php';

use App\Administration\Faculty\Department\Student\Student;

$student = new Student;
$faculty = 'Машиностроительный';
$student->addFaculty($faculty);
$student->addDepartment($faculty , 'ОМД');
$faculty = 'Автоматизации';
$student->addFaculty($faculty);
var_dump($student->getFaculties());

$student->addDepartment($faculty, 'АПП');
$student->addDepartment($faculty, 'КИТ');
var_dump($student->getDepartments());

$student->removeDepartment('ОМД');
var_dump($student->getDepartments());

$student->addStudent('КИТ', 'Dima');
$student->addStudent('АПП', 'Vasya');
var_dump($student->getStudents('КИТ'));
var_dump($student->getStudentCount());
var_dump($student->getFaculties());
