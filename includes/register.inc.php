<?php

if(isset($_POST['submit'])) {

    $user_username = trim($_POST['user_username']) ?? null;
    $user_password = trim($_POST['user_password']) ?? null;
    $confirm_password = trim($_POST['confirm_password']) ?? null;
    $user_email = trim($_POST['user_email']) ?? null;

    // Instantiate Register Controller Class

    include "../classes/register.classes.php";
    include "../classes/register-controller.classes.php";

    $register = new RegisterController($user_username,$user_password,$confirm_password,$user_email);

    
}