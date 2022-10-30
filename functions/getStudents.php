<?php

require_once '../../../classes/AdminClass.php';
$students = new AdminClass();
return $students->getStudents();
