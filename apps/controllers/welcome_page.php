<?php

if(file_exists(VIEW_PATH. "welcome_page.phtml")){
    $view = "welcome_page.phtml";
} else {
    $view = "global_header.phtml";
}