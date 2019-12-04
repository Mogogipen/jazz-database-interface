<?php

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function Login() {

    require "class/db.php";

    $conn = new Database();

    if(empty($_POST['username'])) {
        redirect("/form.php?Failed_Login");
        return false;
    }
    
    if(empty($_POST['password'])) {
        redirect("/form.php?Failed_Login");
        return false;
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if(!$conn->login($username,$password)) {
        return false;
    }
    
    session_start();
    
    $_SESSION["username"] = $username;
    
    return true;
}

if (isset($_POST)) {
    if (Login()) {
        redirect("/");
    } else {
        redirect("/form.php?Failed_Login");
    }
}
?>