<?php 
if (isset($_SESSION['user'])){
    if((file_exists(VIEW_PATH. "confirm_delete_page.phtml")) and ($_SESSION['user']['0']['role'] == 1)){
        $view = "confirm_delete_page.phtml";
    } else {
        $view = "welcome_page.phtml";
    }
} else {
    $view = "welcome_page.phtml";
}