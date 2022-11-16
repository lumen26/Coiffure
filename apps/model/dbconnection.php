<?php
class dbConnect
{
    public $username;
    public $password;
    public $dbname;
    public $conn;

    public function __construct($username, $password, $dbname)
    {
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        try {
            $dbo = new PDO('mysql:host=localhost; dbname=' . $this->dbname . ';charset=utf8', $this->username, $this->password);
            $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $dbo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->conn = $dbo;
        } catch (PDOException $e) {
            die('Erreur:' . $e->getMessage());
        }
    }

    public function addUser($name,  $password, $email)
    {
        $sql = "INSERT INTO `users` (`name`, `email`,`password`) VALUES (:name, :email, :password)";
        $req = $this->conn->prepare($sql);
        $exec = $req->execute(array(":name" => $name, ":email" => $email, ":password" => $password));
        if ($exec) {
            return true;
        }
    }

    public function verifyUser($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $req = $this->conn->prepare($sql);
        $req->execute(["email" => $email]);
        $stmt = $req->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public function modifyPassword($newPassword, $email)
    {
        $sql = "UPDATE users SET password = :password WHERE email = :email";
        $req = $this->conn->prepare($sql);
        $stmt = $req->execute(["password" => password_hash($newPassword, PASSWORD_DEFAULT), "email" => $email]);
        // $stmt = $req-> fetchAll();
        return $stmt;
    }

    
}
