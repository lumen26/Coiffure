<?php 

if(file_exists(VIEW_PATH. "register_page.phtml")){
    $view = "register_page.phtml";
} else {
    $view = "global_header.phtml";
}



$model = new dbConnect('root', '', 'coiffure');

if (isset($_POST["signup"])) {
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $name = htmlentities($_POST["name"]);
    $email = $_POST["email"];

    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["cpassword"])) {
        unset($_SESSION["message"]);
        $_SESSION["message"] = "Merci de bien vouloir remplir les champs.";
        $_SESSION["flash_data"] = "error";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    } elseif (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $surname)) {
        unset($_SESSION["message"]);
        $_SESSION["message"] = "Veuillez entrer un nom correcte.";
        $_SESSION["flash_data"] = "error";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    } elseif ($password != $cpassword) {
        unset($_SESSION["message"]);
        $_SESSION["message"] = "Vos mots de passe ne correspondent pas.";
        $_SESSION['flash_data'] = "error";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["message"] = "Votre adresse e-mail est incorrect";
        $_SESSION['flash_data'] = "error";
        unset($_SESSION["message"]);
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    } elseif (strlen($password) < 6) {
        unset($_SESSION["message"]);
        $_SESSION["message"] = "Mot de passe trop court, 6 caracteres minimum";
        $_SESSION['flash_data'] = "error";
        header("Location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    } else {
        $verifyUser = $model->verifyUser($email);
        if (sizeof($verifyUser) > 0) {
            unset($_SESSION["message"]);
            $_SESSION["message"] = "Ce compte existe déjà";
            $_SESSION['flash_data'] = "error";
            header("Location:" . $_SERVER["HTTP_REFERER"]);
            exit;
        } else {
            $newPassword = password_hash($password, PASSWORD_DEFAULT);
            $creationDate = date("Y-m-d H:i:s");
            $file = '';
            if (!empty($_FILES)) {
                $value = $_FILES["file"]["name"];
                $infosfichier = pathinfo($value);
                $extensions_upload = $infosfichier['extension'];
                $extensions_allowed = array('jpeg', 'jpg', 'png', 'gif');
                if (in_array($extensions_upload, $extensions_allowed)) {
                    move_uploaded_file(
                        $_FILES["file"]["tmp_name"],
                        ASSET_PATH.'stockage/' . basename($value)
                    );
                    $file = basename($value);
                }
                
                $filename = $infosfichier["filename"];
            
            }
            $newUser = $model->addUser($name, $surname, $newPassword, $email, $sexe, $phone, $creationDate, $file);
            if ($newUser) {
                setcookie('user', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
                $_SESSION["message"] = "Votre compte a été crée avec succès";
                $_SESSION['flash_data'] = "success";
                header("Location: login");
            }
        }
    }
}
exit;
?>

