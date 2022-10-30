<?php

require_once '../../../classes/AdminClass.php';
$edit = new AdminClass();
$id = $_GET['id'];
$teacher = 'teacher';
$student = 'student';
$class = $edit->findClass($id);
$teachers = $edit->findTeachers($id, $teacher);
$students = $edit->findStudents($id, $student);
return [$class, $teachers, $students];
