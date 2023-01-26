<?php
class Authentication {

    private $conn;
    
    function __construct($conn){    
        $this->conn = $conn;
    }

    public function userLogin($user_type, $user_id, $password) {
        try{
            $sql = "SELECT * FROM users WHERE username = :user_id AND password = :password ;";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(':user_id', $user_id);
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