<?php

require_once "../database/Admin.php";
require_once  "../functions/URL_helper.php";

class AdminClass
{
        private $method;
    public function __construct()
    {
        $this->method = new Admin();
    }

    public function createClassRoom($data)
    {
    $this->method->setClassDetails($data);
    return redirect("frontend/admin/index.php");
    }
    public function findClass($id)
    {
        return $this->method->findClass($id);
    }
    public function getAllClasses()
    {
        return $this->method->getAllClasses();
    }
    public function setTeacher($data)
    {
        if ($this->method->find($data)) {
            $_SESSION['message'] = "Email exists";
            return redirect ('frontend/admin/index.php');

        } else {

            if ($this->method->insertTeachers($data)) {
                $_SESSION['message'] = 'Teacher added successfully';

                redirect('frontend/admin/index.php');
            } else {
                $_SESSION['message'] =  ' An error occurred, Please again later.';
            }

            return redirect("frontend/admin/index.php");
        }
    }
    public function getTeachers()
    {
        return $this->method->getAllTeachers();
    }
    public function setStudents($data)
    {
        if ($this->method->find($data)) {
            $_SESSION['message'] = 'Email exists';
            return redirect ('frontend/admin/index');

        } else {

            if ($this->method->insertStudents($data)) {
                $_SESSION['message'] =  'Student added successfully';

                redirect('frontend/admin/index.php');
            } else {
                $_SESSION['message'] =  'An error occurred, Please again later';
            }

            return redirect("frontend/admin/index.php");
        }
    }
    public function getStudents()
    {
        return $this->method->getAllStudents();
    }
    public function find($id)
    {
        return $this->method->getUserById($id);
    }
    public function updateUser($data)
    {
       if($this->method->updateUser($data))
       {
           $_SESSION['message'] =  'Student added successfully';

           return redirect('frontend/admin/index.php');
       }
    }
    public function delete($id)
    {
        if($this->method->deleteUser($id))
        {
            $_SESSION['message'] =  'Student deleted successfully';

            return redirect('frontend/admin/index.php');
        }
    }
}
