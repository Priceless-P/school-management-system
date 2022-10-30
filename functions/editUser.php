<?php


require_once '../classes/AdminClass.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data = [
        'id' => $_GET['id'],
        'full-name'=>trim($_POST['full-name']),
        "username"=> trim($_POST['username']),
        "email"=> trim( $_POST['email']),
        "bio" => trim($_POST['bio'])
    ];
    $edit = new AdminClass();
    return $edit->updateUser($data);
}
else
{
    $edit = new AdminClass();
    $id = $_GET['id'];
    $student = $edit->find($id);
    return $student;
}
