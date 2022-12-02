<?php 
if (isset($_SESSION['user'])){
    if((file_exists(VIEW_PATH. "p_register_page.phtml")) and ($_SESSION['user']['0']['role'] == 1)){
        $view = "p_register_page.phtml";
    } else {
        $view = "welcome_page.phtml";
    }
} else {
    $view = "welcome_page.phtml";
}