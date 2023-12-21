<?php
    require_once "core/class/User.php";
    
    $id = $_POST['id'];
    $user = new User;
    if($user->delete($id)){
        //mensaje
    }else{
        //mensaje
    }
    header('Location: users.php');