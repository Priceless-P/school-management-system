<?php

use classes\Home\Home;

require_once '../classes/Home.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $password = trim($_POST['password']);
    $new_pass = password_hash($password, PASSWORD_DEFAULT);
    $data = [
        'full-name'=>trim($_POST['full-name']),
        "username"=> trim($_POST['username']),
        "email"=> trim( $_POST['email']),
        "phone"=> trim($_POST['phone']),
        'role'=> trim( $_POST['role']),
        'password'=> $new_pass
    ];
$login = new Home();
$login->register($data);
}
