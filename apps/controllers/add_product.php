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

if (isset($_POST["add_product"])) {    
    if ((!isset($_POST["p_name_f"])) or (empty($_POST["p_name_f"]))){
        $_SESSION["p_register_error"] = "<div class='alert alert-danger' role='alert'>Veuillez entrer un nom</div>";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    }
    elseif ((!isset($_POST["p_description_f"])) or (empty($_POST["p_description_f"]))){
        $_SESSION["p_register_error"] = "<div class='alert alert-danger' role='alert'>Veuillez entrer une description</div>";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
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
            $_SESSION["p_register_error"] = "<div class='alert alert-danger' role='alert'>Format de fichier invalide (image)</div>";
            header("Location:" . $_SERVER["HTTP_REFERER"]);
            exit;
        }
        //vérifie la taille du fichier
        elseif ($filesize > $maxsize){
            $_SESSION["p_register_error"] = "<div class='alert alert-danger' role='alert'>Taille du fichier supérieure à la limite autorisée (image)</div>";
            header("Location:" . $_SERVER["HTTP_REFERER"]);
            exit;
        }
        //vérifie le type MIME du fichier
        elseif (in_array($filetype, $allowed)){
            $p_name_f = $_POST["p_name_f"];
            $p_description_f =  $_POST["p_description_f"];
            $p_image_f = $_FILES["p_image_f"]["name"];
            move_uploaded_file($_FILES["p_image_f"]["tmp_name"], "assets/images/produits/" . $_FILES["p_image_f"]["name"]);
            $newProduct = $model->addProduct($p_name_f, $p_description_f, $p_image_f);
            if ($newProduct){
                $_SESSION["p_register_success"] = "<div class='alert alert-success' role='alert'>Produit enregistré avec succès.</div>";
                header("Location:" . $_SERVER["HTTP_REFERER"]);
                exit;
            }
        }
    } else {
        $_SESSION["p_register_error"] = "<div class='alert alert-danger' role='alert'>Erreur: Il y a eu un problème de téléchargement de votre fichier (image). Veuillez réessayer.</div>";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    }
}
exit;
?>