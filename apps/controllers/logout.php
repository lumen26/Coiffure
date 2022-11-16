<?php

$model = new dbConnect('root', '', 'coiffure');

// if (isset($_POST["logout"])) {
    // session_start();

    // Unset all of the session variables
    $_SESSION = array();
    unset($_SESSION);
    // Destroy the session.
    session_destroy();

    // echo '<pre>',print_r($_SESSION,1),'</pre>';
    // die;
    // Redirect to welcome page
    header("location: welcome");
    exit;
// }
