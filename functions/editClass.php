<?php
require_once '../classes/AdminClass.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$data = [
'id' => $_GET['id'],
'full-name'=>trim($_POST['name']),
"username"=> trim($_POST['details']),
];
$edit = new AdminClass();
return $edit->editClass($data);
}
else
{
$edit = new AdminClass();
$id = $_GET['id'];
$class = $edit->find($id);
return $class;
}
