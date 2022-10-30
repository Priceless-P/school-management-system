<?php

use classes\Admin\Admin;

require_once '../classes/Admin.php';
$students = new Admin();
return $students->getTeachers();
