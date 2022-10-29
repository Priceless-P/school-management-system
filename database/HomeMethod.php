<?php

namespace database\HomeMethod;

class HomeMethod
{
    private Database $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function login($email, $password){
        $this->db->query('SELECT * FROM Users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->getOne();

        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password))
            return $row;
         else
            return false;

    }


    public function register($data): bool
    {
        $this->db->query("INSERT INTO Users (full-name,username, email, password, role)
	            VALUES(:fullname, :username, :email, :password, :role)");
        $this->db->bind(':full-name', $data['full-name']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':role', $data['role']);
        if($this->db->execute())
            return true;
        else
            return false;

    }

    public function find($data): bool
    {
        $this->db->query("SELECT * FROM Users WHERE email = :email");
        $this->db->bind(':email', $data['email']);
        $this->db->getOne();

        if($this->db->rowCount()>0)
            return true;
        else
            return false;
    }

    public function getUserRole($username){
        $this->db->query("SELECT role FROM Users WHERE username = :username");
        $this->db->bind(':username', $username);
        return $this->db->getOne();
    }
}
