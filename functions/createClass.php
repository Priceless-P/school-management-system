<?php

use classes\Admin\Admin;

require_once '../classes/Admin.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{


    $password = trim($_POST['password']);
    $new_pass = password_hash($password, PASSWORD_DEFAULT);
    $data = [
        'class-name'=>trim($_POST['class-name']),
        'details'=> trim($_POST['details']),
        'teachers,' => trim($_POST['teachers']),
        'students' => trim($_POST['students'])
    ];
    $add = new Admin();
    return $add->createClassRoom($data);
}
