<?php
    session_start();
    if (!isset($_SESSION['logged']) || $_SESSION['logged'] != true) {
        header('Location: login.php');
        return;
    }
    //Validar que los datos esten completos


    require_once "core/class/Ticket.php";
    require_once "core/class/TicketDetail.php";
    $id = $_POST['id'];
    $response = $_POST['response'];
    $ticket = new Ticket;
    $date = date('Y-m-d H:i:s');
    //cambio de estado a Finalizado
    if($ticket->update($id, 'Finalizado')){
        //Agregamos la respuesta
        $details = new TicketDetail;
        $data = [
            'response' => $_POST['response'],
            'date' => $date
        ];
        if($details->update($id, $data)){
            $_SESSION['success'] = "Ticket finalizado con exito";
            header('Location: tickets.php');
        }else{
            $ticket->update($id, 'Pendiente');
            //mensaje error
            //redirección
        }
    }else{
         //mensaje de error
         //redirección
    }

    

