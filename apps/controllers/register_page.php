<?php 

if(file_exists(VIEW_PATH. "register_page.phtml")){
    $view = "register_page.phtml";
} else {
    $view = "global_header.phtml";
}