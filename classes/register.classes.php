<?php 

class Register extends DatabaseConnection {
    
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