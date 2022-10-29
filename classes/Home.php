<?php

namespace classes\Home;

use database\HomeMethod\HomeMethod;

class Home
{
    private HomeMethod $method;
    public function __construct()
    {
        $this->method = new HomeMethod();
    }
    public function login($data)
    {

            $loggedInUser = $this->method->login($data['email'], $data['password']);

            if($loggedInUser){
                $this->createUserSession($loggedInUser);

            } else {
                flash('login_err', 'Email or Password incorrect');
                return redirect ('login', $data);
            }
        }


    public function register($data){

            if($this->method->find($data))
            {
                flash('reg_err',"Email exists");
                return redirect('register');

            }
            else
            {

                if($this->method->register($data))
                {
                    flash('reg_success', 'Registration successful. Please Login');

                    redirect ('student/login');
                }
                else
                {
                    flash('reg_err', " Registration not successful, Please again later.");
                }

            }

        }


    public function createUserSession($user){
        $role = $this->method->getUserRole($user->username);
        if ($role->role == "Student")
        {
            $_SESSION['student_id'] = $user->id;
            $_SESSION['student_email'] = $user->email;
            $_SESSION['student_name'] = $user->username;
            return redirect('student/dashboard');
        }
        elseif($role->role == "Teacher")
        {
            $_SESSION['teacher_id'] = $user->id;
            $_SESSION['teacher_email'] = $user->email;
            $_SESSION['teacher_name'] = $user->username;
            $_SESSION['teacher_location'] = $user->location;
            return redirect('teacher/dashboard');
        }

    }
}
