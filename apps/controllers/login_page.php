<?php 

if(isset($_SESSION['user']))
{
    header("location: home");
    exit;
}

if(file_exists(VIEW_PATH. "login_page.phtml")){
    $view = "login_page.phtml";
} else {
    $view = "welcome_page.phtml";
}

