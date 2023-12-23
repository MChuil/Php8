<?php
    session_start();
    if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
        header('Location: login.php');
        return;
    }
    require_once "core/class/User.php";
    
    $id = $_POST['id'];
    $user = new User;
    if($user->delete($id)){
        $_SESSION['success'] = "Usuario eliminado de forma exitosa";
    }else{
        $_SESSION['error'] = "Error, intente nuevamente y si persiste, comuniquese con el WebMaster";
    }
    header('Location: users.php');