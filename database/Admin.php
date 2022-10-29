<?php
namespace database\Admin;

class Admin
{

    private Database $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getClassDetails()
    {
        $this->db->query("SELECT * FROM Teachers");
        $this->db->getAll();
    }

    public function setClassDetails($data)
    {
        $this->db->query("INSERT INTO Class (classname, teachers, students)
                                VALUES (:classname, :teachers, :students)");
        $this->db->bind(':classname', $data['classname']);
        $this->db->bind(':teachers', $data['teachers']);
        $this->db->bind(':students', $data['students']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function insertTeachers($data)
    {
        $this->db->query("INSERT INTO Teachers (full_name, sex, qualification)
                                VALUES (:fullname, :sex, :qualification)");
        $this->db->bind(':full_name', $data['full_name']);
        $this->db->bind(':sex', $data['sex']);
        $this->db->bind(':qualification', $data['qualification']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getAllTeachers()
    {
        $this->db->query("SELECT * FROM Teachers");
        $this->db->getAll();
    }
    public function insertStudents($data)
    {
        $this->db->query("INSERT INTO Students (full_name, sex, age)
                                VALUES (:fullname, :sex, :age)");
        $this->db->bind(':full_name', $data['full_name']);
        $this->db->bind(':sex', $data['sex']);
        $this->db->bind(':qualification', $data['qualification']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function getAllStudents()
    {
        $this->db->query("SELECT * FROM Students");
        $this->db->getAll();
    }
}
