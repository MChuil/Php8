<?php
    session_start();
    if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
        header('Location: login.php');
        return;
    }
    require_once "core/class/Ticket.php";
    // Validación
        $_SESSION['data'] = $_POST;
        if(empty($_POST['area'])){
            $_SESSION['error'] = 'No ha indicado el area';
        }else if(empty($_POST['title'])){
            $_SESSION['error'] = 'No ha escrito el titulo';
        }else if(empty($_POST['message'])){
            $_SESSION['error'] = 'No ha indicado el detalle del problema';
        }

        if(!empty($_SESSION['error'])){
            header('Location: createticket.php');
            return;
        }
    
    //insertar
    $date = date('Y-m-d H:i:s');
    $data = [
        "area" => trim($_POST['area']),
        "title" => trim($_POST['title']),
        "create" => $date,
        "status" => 'Pendiente',
        "user_id" => $_SESSION['userid'],
    ];
    $ticket = new Ticket;
    if($ticket->create($data)){
        $_SESSION['success'] = "Ticket creado. A la brevedad daremos atención a su solicitud";
        unset($_SESSION['data']);
        header("Location: tickets.php");
    }else{
        $_SESSION['error'] = "Error, intente nuevamente y si persiste, comuniquese con el WebMaster";
        header("Location: createticket.php");
    }