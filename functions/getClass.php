<?php

require_once '../../../classes/AdminClass.php';
    $edit = new AdminClass();
    $id = $_GET['id'];
    $class = $edit->findClass($id);
    return $class;