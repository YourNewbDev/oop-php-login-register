<?php

class LoginController extends Login {
    private $user_username;
    private $user_password;

    public function __construct($user_username, $user_password) {

        $this->user_username = $user_username;
        $this->user_password = $user_password;
    }

    public function loginUser () {
       if ($this->isEmpty() == false) {
            header("location: ../index.php?error=emptyinput");
            exit();   
       }

    //    $register = new Register();

       $this->getUser($this->user_username, $this->user_password);
    }


    public function isEmpty () {
        $result = null;

        if (empty($this->user_username) || empty($this->user_password))  {

            $result = false;

        }
        else {

            $result = true;
        }

        return $result;
    }

}