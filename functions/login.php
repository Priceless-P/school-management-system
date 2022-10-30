<?php


require_once '../classes/Home.php';
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $data = [
        "email" => trim($_POST['email']),
        "password" => trim($_POST['password']),
    ];
    $login = new Home();
    $login->login($data);
}
