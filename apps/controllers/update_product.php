<?php

if (isset($_SESSION['user'])){
    if (!($_SESSION['user']['0']['role'] == 1)){
    header("Location: home");
    exit;
    }
} else {
    header("Location: home");
    exit;
}

$model = new dbConnect('root', '', 'coiffure');

if (isset($_POST["update_product"])) {    
    if ((!isset($_POST["p_name_f"])) or (empty($_POST["p_name_f"]))){
        $_SESSION["update_alert"] = "<div class='alert alert-danger' role='alert'>Echec de la modification (nom vide)</div>";
        header("Location: admin");
        exit;
    }
    elseif ((!isset($_POST["p_description_f"])) or (empty($_POST["p_description_f"]))){
        $_SESSION["update_alert"] = "<div class='alert alert-danger' role='alert'>Echec de la modification (description vide)</div>";
        header("Location: admin");
        exit;
    }
    elseif (isset($_FILES["p_image_f"]) && $_FILES["p_image_f"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image.jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["p_image_f"]["name"];
        $filetype = $_FILES["p_image_f"]["type"];
        $filesize = $_FILES["p_image_f"]["size"];
        $maxsize = 20 * 1024 * 1024;
        //vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) {
            $_SESSION["update_alert"] = "<div class='alert alert-danger' role='alert'>Echec de la modification (format fichier invalide)</div>";
            header("Location: admin");
            exit;
        }
        //vérifie la taille du fichier
        elseif ($filesize > $maxsize){
            $_SESSION["update_alert"] = "<div class='alert alert-danger' role='alert'>Echec de la modification (fichier trop grand)</div>";
            header("Location: admin");
            exit;
        }
        //vérifie le type MIME du fichier
        elseif (in_array($filetype, $allowed)){
            $p_id_f = $_POST["p_id_f"];
            $p_name_f = $_POST["p_name_f"];
            $p_description_f =  $_POST["p_description_f"];
            $p_image_f = $_FILES["p_image_f"]["name"];

            //suppression de l'ancienne image
            unlink("assets/images/produits/".$_POST["p_image_old"]);

            //
            move_uploaded_file($_FILES["p_image_f"]["tmp_name"], "assets/images/produits/" . $_FILES["p_image_f"]["name"]);

            
            $updProduct = $model->updateProduct($p_id_f, $p_name_f, $p_description_f, $p_image_f);
            if ($updProduct){
                $_SESSION["update_alert"] = "<div class='alert alert-success' role='alert'>Produit modifié avec succès.</div>";
                header("Location: admin");
                exit;
            }
        }
    } else {
        $p_id_f = $_POST["p_id_f"];
        $p_name_f = $_POST["p_name_f"];
        $p_description_f =  $_POST["p_description_f"];
        $updProduct = $model->updateProductNoImg($p_id_f, $p_name_f, $p_description_f);
        if($updProduct){
            $_SESSION["update_alert"] = "<div class='alert alert-success' role='alert'>Produit modifié avec succès.</div>";
        header("Location: admin");
        exit;
        }
    }
}
exit;
?>