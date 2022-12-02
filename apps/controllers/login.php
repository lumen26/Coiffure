<?php


$model = new dbConnect('root', '', 'coiffure');

if (isset($_POST["signin"])) {
    // $email = $_POST["email"];
    // $password = $_POST["password"];
    $inputEmail = $_POST["inputEmail"];
    $inputPassword = $_POST["inputPassword"];


    if (empty($_POST["inputEmail"]) || empty($_POST["inputPassword"])) {
        unset($_SESSION["message"]);
        $_SESSION["message"] = "Bien vouloir remplir les champs !";
        $_SESSION["flash_data"] = "error";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    } elseif (!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
        unset($_SESSION["message"]);
        $_SESSION["message"] = "Votre adresse e-mail est incorrect";
        $_SESSION['flash_data'] = "error";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    } else {
        $verifyUser = $model->verifyUser($inputEmail);
        // var_dump($verifyUser);exit;
        // var_dump($verifyUser[0]["password"]);exit;
        if (sizeof($verifyUser) == 0) {
            unset($_SESSION["message"]);
            $_SESSION["message"] = "Ce compte n'existe pas";
            $_SESSION["flash_data"] = "error";
            header("Location:" . $_SERVER["HTTP_REFERER"]);
            exit;
        } else {
            if (!password_verify($inputPassword, $verifyUser[0]["password"])) {
                // var_dump($inputPassword);die;
                unset($_SESSION["message"]);
                $_SESSION["message"] = "Mauvais mot de passe !";
                $_SESSION["flash_data"] = "error";
                header("Location: login");
                // exit;
            } else {
                $_SESSION['user'] = $verifyUser;
                if ($_SESSION['user']['0']['role'] == 1) {
                    header("Location: admin");
                    exit;
                } else {
                    unset($_SESSION['user']);
                    header("location:404");
                    exit;
                }
            }
        }
    }
}

exit;
