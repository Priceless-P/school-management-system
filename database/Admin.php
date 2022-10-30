<?php

require_once 'Database.php';

class Admin
{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
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
    public function getAllClasses()
    {
        $this->db->query("SELECT * FROM Class");
        return $this->db->getAll();
    }

    public function insertTeachers($data)
    {
        $this->db->query("INSERT INTO Users (full-name, username, email, password, role)
                                VALUES (:fullname, :username, :email, :password, :role)");
        $this->db->bind(':full-name', $data['full-name']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
         $this->db->bind(':password', $data['password']);
          $this->db->bind(':role', $data['role']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getAllTeachers()
    {
        $this->db->query("SELECT * FROM Users where role = :role");
        $this->db->bind(':role', 'teacher');
        return $this->db->getAll();
    }
    public function insertStudents($data)
    {
        $this->db->query("INSERT INTO Users (full-name, username, email, password, role)
                                VALUES (:full-name, :username, :email, :password, :role)");
        $this->db->bind(':full-name', $data['full-name']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
         $this->db->bind(':password', $data['password']);
          $this->db->bind(':role', $data['role']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function getAllStudents()
    {
        $this->db->query("SELECT * FROM Students");
        return $this->db->getAll();
    }
    public function find($data): bool
    {
        $this->db->query("SELECT * FROM Users WHERE email = :email");
        $this->db->bind(':email', $data['email']);
        $row = $this->db->getOne();

        if($this->db->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
    public function getUserById($id){
        $this->db->query("SELECT * FROM Users WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->getOne();
    }
    public function findClass($id){
        $this->db->query("SELECT * FROM Class WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->getOne();
    }
    public function updateUser($data): bool
    {
        $this->db->query('UPDATE Users SET fullname = :fullname username = :username, email = :email, WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':full-name', $data['full-name']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
        public function deleteUser($delete){
        $this->db->query("DELETE FROM User WHERE product_id = :id");
        $this->db->bind(':id', $delete);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }
}
