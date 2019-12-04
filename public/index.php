<?php 

// Start the session
session_start();

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

$request = explode("?", $_SERVER['REQUEST_URI'])[0];

switch ($request) {
    case '/' :
    case '/index':
    case '/index.php':
        if ($_SESSION["username"] != "deanmachine") {
            redirect("/form.php");
        }
        require __DIR__ . '/table.php';
        break;
    case '/logout':
        session_unset();
        redirect("/form.php");
        break;
    case '/add':
        if ($_SESSION["username"] != "deanmachine") {
            redirect("/form.php");
        }
        require __DIR__ . '/add.php';
        redirect("/");
        break;
    case '/delete/':
        if ($_SESSION["username"] != "deanmachine") {
            redirect("/form.php");
        }
        require __DIR__ . '/delete.php';
        redirect("/");
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        require __DIR__ . '/404.php';
        break;
}

?>