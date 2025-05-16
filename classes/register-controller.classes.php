<?php

class RegisterController {
    private $user_username;
    private $user_password;
    private $confirm_password;
    private $user_email;

    public function __construct($user_username, $user_password, $confirm_password, $user_email) {

        $this->user_username = $user_username;
        $this->user_password = $user_password;
        $this->confirm_password = $confirm_password;
        $this->user_email = $user_email;

    }

    private function registerUser () {
       if ($this->isEmpty() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();   
       }
       if ($this->invalidUsername() == false) {
            header("location: ../index.php?error=username");
            exit();   
       }
       if ($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();   
       }
       if ($this->passwordMatch() == false) {
            header("location: ../index.php?error=passwordmatch");
            exit();   
       }
       if ($this->useremailTaken() == false) {
            header("location: ../index.php?error=useroremailtaken");
            exit();   
       }

       $this->setUser();
    }


    private function isEmpty () {
        $result ?? null;

        if (empty($this->user_username) || empty($this->user_password) || empty($this->confirm_password) || empty($this->user_email))  {

            $result = false;

        }
        else {

            $result = true;
        }

        return $result;
    }

    private function invalidUsername() {
        $result ?? null;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->user_username)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail() {
        $result ?? null;

        if (!filter_var($this->user_email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function passwordMatch() {
        $result ?? null;

        if ($this->user_password !== $this->confirm_password) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function useremailTaken() {
        $result ?? null;

        $register = new Register();

        if ($register->checkUser($this->user_username, $this->user_email)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }
}