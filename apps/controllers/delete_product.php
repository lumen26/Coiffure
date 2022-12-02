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

//if (isset($_POST["d_form"])){
    if ((!isset($_POST["d_product"])) or (empty($_POST["d_product"]))){
        $_SESSION["delete_alert"] = "<div class='alert alert-danger' role='alert'>Une erreur est survenue (valeur vide)</div>";
        header("Location: admin");
        exit;
    }
    else{
        $d_product = $_POST["d_product"];
        $delProduct = $model->removeProduct($d_product);
        if ($delProduct){
            $_SESSION["delete_alert"] = "<div class='alert alert-success' role='alert'>Produit supprimé</div>";
            header("Location: admin");
            exit;
        }
        else{
            $_SESSION["delete_alert"] = "<div class='alert alert-danger' role='alert'>Une erreur est survenue (fonction défaillante)</div>";
            header("Location: admin");
            exit;
        }
    }
// }
// else{
//     $_SESSION["delete_alert"] = "<div class='alert alert-danger' role='alert'>Une erreur est survenue (formulaire vide)</div>";
//     header("Location: admin");
//     exit;
// }
?>