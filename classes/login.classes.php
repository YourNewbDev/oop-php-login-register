<?php 

class Login extends DatabaseConnection {

    public function getUser($user, $password) {
        $stmt = $this->connect()->prepare('SELECT * FROM tbluser WHERE user_username = ? OR user_email = ?');

        if (!$stmt->execute([$user, $user])) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!password_verify($password, $userData['user_password'])) {
            $stmt = null;
            header('location: ../index.php?error=wrongpassword');
            exit();
        }

        session_start();
        $_SESSION['user_id'] = $userData['user_id'];
        $_SESSION['user_username'] = $userData['user_username'];

        $stmt = null;


        header("location: ../index.php?login=success");
        exit();
    }
}
