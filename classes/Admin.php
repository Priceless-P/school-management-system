<?php

namespace classes\Admin;
require_once "../database/Admin.php";

class Admin
{
        private $method;
    public function __construct()
    {
        $this->method = new \database\Admin\Admin();
    }

    public function createClassRoom($data)
    {
    $this->method->setClassDetails($data);
    return redirect("admin/dashboard");
    }
    public function setTeacher($data)
    {
        $this->method->insertTeachers($data);
        return redirect("admin/dashboard");
    }
    public function getTeachers()
    {
        return $this->method->getAllTeachers();
    }
    public function setStudents($data)
    {
        $this->method->insertStudents($data);
        return redirect("admin/dashboard");
    }
    public function getStudents()
    {
        return $this->method->getAllStudents();
    }
}
