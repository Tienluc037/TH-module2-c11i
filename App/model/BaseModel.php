<?php

namespace App\model;

class BaseModel
{
    public $connect;
    public $table;

    public function __construct()
    {
        $db = new DbConnect();
        $this->connect = $db->connect();
    }


    public function getAll()
    {
        $sql = "select * from $this->table";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select * from $this->table where id = $id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        $this->connect->query($sql);
    }
}