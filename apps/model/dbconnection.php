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

    public function getProduct($p_id){
        $sql = "SELECT p_id,p_nom,p_description,p_image FROM produits WHERE p_id = :p_id";
        $req = $this->conn->prepare($sql);
        $req->bindParam(":p_id", $p_id);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_OBJ);
        return $row;
    }

    public function addProduct($p_name, $p_description, $p_image)
    {
        $sql = "INSERT INTO `produits` (`p_nom`, `p_description`, `p_image`) VALUES (:p_nom, :p_description, :p_image)";
        $req = $this->conn->prepare($sql);
        $exec = $req->execute(array(":p_nom" => $p_name, ":p_description" => $p_description, ":p_image" => $p_image));
        if ($exec){
            return true;
        }
        else{
            return false;
        }
    }

    public function updateProduct($p_id, $p_name, $p_description, $p_image)
    {
        $sql = "UPDATE produits SET p_nom = :p_nom, p_description = :p_description, p_image = :p_image WHERE p_id = :p_id";
        $req = $this->conn->prepare($sql);
        $stmt = $req->execute(array(":p_id" => $p_id, ":p_nom" => $p_name, ":p_description" => $p_description, ":p_image" => $p_image));
        return($stmt);
    }

    public function updateProductNoImg($p_id, $p_name, $p_description)
    {
        $sql = "UPDATE produits SET p_nom = :p_nom, p_description = :p_description WHERE p_id = :p_id";
        $req = $this->conn->prepare($sql);
        $stmt = $req->execute(array(":p_id" => $p_id, ":p_nom" => $p_name, ":p_description" => $p_description));
        return($stmt);
    }

    public function removeProduct($p_id)
    {
        //récupérer le nom de l'image à supprimer
        $sql = "SELECT p_id,p_nom,p_description,p_image FROM produits WHERE p_id = :p_id";
        $req = $this->conn->prepare($sql);
        $req->bindParam(":p_id", $p_id);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_OBJ);
        $p_image = $row->p_image;

        //effacer les données
        $sql = "DELETE FROM `produits` WHERE p_id = :p_id";
        $req = $this->conn->prepare($sql);
        $stmt = $req->execute(array(":p_id" => $p_id));

        //effacer l'image
        if ($stmt){
            unlink("assets/images/produits/".$p_image);
        }
        return $stmt;
    }

    public function productList()
    {
        $res = $this->conn->query('SELECT p_id,p_nom,p_description,p_image FROM produits');
        while ($row = $res->fetch(PDO::FETCH_OBJ)){
            echo "<div class='card'>";
                echo "<div class='row'>";
                    echo ("<div class='col-sm-4'>");
                        echo ("<img src='assets/images/produits/".$row->p_image."' class='w-100'>");
                    echo ("</div>");
                    echo ("<div class='col-sm-8'>");
                        echo ("<h5 class='card-title'>".$row->p_nom."</h5>");
                        echo ("<p class='card-text'>".$row->p_description."</p>");
                        echo ("<div>");
                            echo ("<button id='upd".$row->p_id."' type='button' class='btn btn-success b_updateproduct' style='margin-right: 1em;'>Modifier</button>");
                            echo ("<button id='del".$row->p_id."' type='button' class='btn btn-danger b_deleteproduct'>Supprimer</button>");
                        echo ("</div>");
                    echo ("</div>");
                echo "</div>";
            echo "</div>";
        }
        return 0;
    }

    public function productCarousel()
    {
        $res = $this->conn->query('SELECT p_id,p_nom,p_description,p_image FROM produits');
        $count_ = 0;
        while ($row = $res->fetch(PDO::FETCH_OBJ)){
            if ($count_ == 0)
            {
                echo ("<div class='carousel-item active'>");
                echo ("<div class='row'>");
            }
            elseif ($count_ % 4 == 0)
            {
                echo("<div class='carousel-item'>");
                echo("<div class='row'>");
            }
  
            echo ("<div class='col-xl-3 p-1'>");				
                echo ("<div class='card'>");
                    echo ("<img src='assets/images/produits/".$row->p_image."' class='w-100'>");
                    echo ("<div class='card-body'>");
                        echo ("<h5 class='card-title'>".$row->p_nom."</h5>");
                        echo ("<p class='card-text'>".$row->p_description."</p>");
                        echo ("<a href='#' class='btn btn-outline-success w-100'>Show</a>");
                    echo ("</div>");
                echo ("</div>");
            echo ("</div>");
  
            if (!($count_ == 0) and ($count_ % 4 == 0))
            {
                echo("</div>");
                echo("</div>");
            }

            $count_ = $count_ + 1;
        }
        if ($count_ < 4){
            echo("</div>");
            echo("</div>");
        }
    }
}
