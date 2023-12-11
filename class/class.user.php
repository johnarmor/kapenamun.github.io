<?php
class User {
    private $DB_SERVER = 'localhost';
    private $DB_USERNAME = 'root';
    private $DB_PASSWORD = '';
    private $DB_DATABASE = 'db_file';
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=".$this->DB_SERVER.";dbname=".$this->DB_DATABASE, $this->DB_USERNAME, $this->DB_PASSWORD);
    }

    function get_user_id($email){
        $sql = "SELECT user_id FROM tbl_users WHERE user_email = :email";    
        $q = $this->conn->prepare($sql);
        $q->execute(['email' => $email]);
        $user_id = $q->fetchColumn();
        return $user_id;
    }

    function user_exists($email){
        $sql = "SELECT COUNT(*) FROM tbl_users WHERE user_email = :email";
        $q = $this->conn->prepare($sql);
        $q->execute(['email' => $email]);
        $count = $q->fetchColumn();
        return $count > 0;
    }

    function get_session(){
        if(isset($_SESSION['login']) && $_SESSION['login'] == true){
            return true;
        } else {
            return false;
        }
    }

    public function check_login($email, $password, $authMethod = 'password') 
    {
        if ($authMethod === 'password') 
        {
            // Your existing password-based login logic
            $sql = "SELECT user_id, user_password FROM tbl_users WHERE user_email = :email"; 
            $q = $this->conn->prepare($sql);
            $q->execute(['email' => $email]);
            $user = $q->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['user_password'])) {
                $_SESSION['login'] = true;
                $_SESSION['user_email'] = $email;
                return true;
            } else {
                return false;
            }
        } 
        
        elseif ($authMethod === 'gmail') 
        {
            $sql = "SELECT user_id FROM tbl_users WHERE user_email = :email";
            $q = $this->conn->prepare($sql);
            $q->execute(['email' => $email]);
            $user_id = $q->fetchColumn();

            if ($user_id) 
            {
                // User exists, log them in
                $_SESSION['login'] = true;
                $_SESSION['user_email'] = $email;
                return true;
            } 
            
            else 
            {
                // User does not exist, return false (do not redirect here)
                return false;
            }
        }
    }
}
?>