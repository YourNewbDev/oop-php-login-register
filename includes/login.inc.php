<?php

if(isset($_POST['submit'])) {

try {
    $user_username = trim($_POST['user_username']) ?? null;
    $user_password = trim($_POST['user_password']) ?? null;

    // Instantiate Register Controller Class
    include "../classes/database.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-controller.classes.php";

    $register = new LoginController($user_username,$user_password);

    $register->loginUser();

    header("location: ../index.php?error=none");
    exit();
} catch (PDOException $err) {
    echo $err->getMessage();
}
}