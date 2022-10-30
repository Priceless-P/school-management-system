<?php

require_once '../../../../classes/AdminClass.php';
    $edit = new AdminClass();
    $id = $_GET['id'];
    $classes = $edit->getClasses();
    return $classes;