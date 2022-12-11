<?php
session_start();
if (!isset($router)) $router = $uri[2];

switch ($router) {
    case 'home':
        include "welcome_page.php";
        break;

    case 'produit':
        include "produit_page.php";
        break;

    case 'services':
        include "services_page.php";
        break;

    case 'contact':
        include "contact_page.php";
        break;
        
    case 'login':
        include "login_page.php";
        break;

    case 'register':
        include "register_page.php";
        break;

    case 'signup':
        include "register.php";
        break;

    case 'signin':
        include "login.php";
        break;

    case 'logout':
        include "logout.php";
        break;
        
    case 'addproduct':
        include "add_product.php";
        break;

    case 'confirmdelete':
        include "confirm_delete_page.php";
        break;

    case 'deleteproduct':
        include "delete_product.php";
        break;

    case 'updateproduct':
        include "update_product.php";
        break;

    case 'p_update':
        include "p_update_page.php";
        break;
        
    case 'admin':
        include "admin_page.php";
        break;

    case 'p_register':
        include "p_register_page.php";
        break;

    default:
        include "welcome_page.php";
        break;
}

include(VIEW_PATH . $view);
