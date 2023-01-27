<?php
class Authentication {

    private $conn;
    
    public function __construct($conn){    
        $this->conn = $conn;
    }

    public function checkUserType($email) {
        try{
            $sql = "SELECT (user_type) FROM users WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(':email', $email);
            $stmt->execute();
            $result = $stmt->fetch();

            return $result;
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function adminLogin($user_type, $email, $password) {
        try{
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password ;";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':password', $password);
            $stmt->execute();
            $result = $stmt->fetch();

            return $result;
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>