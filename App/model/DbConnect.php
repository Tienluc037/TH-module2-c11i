<?php
namespace App\model;
use PDO;

class DbConnect
{

    public $dns;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dns = "mysql:host=localhost;dbname=supermarket;charset=utf8";
        $this->username = 'luc';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        try {
            return new PDO($this->dns, $this->username, $this->password);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}