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
    
    case 'services' :
        include "services_page.php";
        break;

    default:
        include "welcome_page.php";
        break;
}

include(VIEW_PATH . $view);
