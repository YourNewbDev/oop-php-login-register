<?php 

class Register extends DatabaseConnection {

    public function setUser($user, $password, $email) {

        $stmt = $this->connect()->prepare('INSERT INTO tbluser (user_username, user_password, user_email)
                                                    VALUES (?, ?, ?)');
        // $stmt->execute();
        // $result = $stmt->fetch();

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute([$user, $hashedPassword, $email])) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }
    
    public function checkUser($user, $email) {

        $stmt = $this->connect()->prepare('SELECT * FROM tbluser WHERE
                                            user_username = ? OR user_email = ?');
        // $stmt->execute();
        // $result = $stmt->fetch();

        if (!$stmt->execute([$user, $email])) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $resultCheck ?? null;

        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;

    }
}