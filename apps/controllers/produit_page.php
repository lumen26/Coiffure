<?php

if(file_exists(VIEW_PATH. "produit_page.phtml")){
    $view = "produit_page.phtml";
} else {
    $view = "welcome_page.phtml";
}