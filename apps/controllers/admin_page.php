<?php 
if (isset($_SESSION['user'])){
    if((file_exists(VIEW_PATH. "admin_page.phtml")) and ($_SESSION['user']['0']['role'] == 1)){
        $view = "admin_page.phtml";
    } else {
        $view = "welcome_page.phtml";
    }
} else {
    $view = "welcome_page.phtml";
}