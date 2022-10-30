<?php

require_once '../classes/AdminClass.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $password = trim($_POST['password']);
    $new_pass = password_hash($password, PASSWORD_DEFAULT);
    $data = [
        'full-name'=>trim($_POST['full-name']),
        "username"=> trim($_POST['username']),
        "email"=> trim( $_POST['email']),
        'password'=> $new_pass,
        'role'=> 'student',
    ];
    $add = new AdminClass();
    $result= $add->setStudents($data);
    return $result;
}
