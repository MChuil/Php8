<?php

require_once 'DataBase.php';

class Ticket extends DataBase
{

    //------------ READ ----------------------------------------
    public function selectAll()
    {
        $sql = "SELECT * FROM tickets";
        $query = $this->conexion->query($sql);
        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function selectById($id)
    {
        $sql = "SELECT * FROM tickets WHERE id = $id LIMIT 1";
        $query = $this->conexion->query($sql);
        return $query->fetch_all(MYSQLI_ASSOC);
    }

    // -------------------- CREATE ----------------------
    public function create($data){
        $sql = "INSERT INTO tickets (area, title, created_at, status, user_id) VALUES (\"{$data['area']}\", \"{$data['title']}\",\"{$data['create']}\", \"{$data['status']}\", {$data['user_id']})";
        $response = $this->conexion->query($sql);
        return $response;
    }
}
