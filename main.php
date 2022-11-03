<?php

@ini_set("display_errors",1);

// $LINK ="127.0.0.1:8000";

$uri = explode("/", $_SERVER['REQUEST_URI']);

require_once('config/constant.php');

require_once('apps/model/dbconnection.php');

require_once('apps/controllers/_defaultController.php');

// session_start();