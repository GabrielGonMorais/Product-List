<?php
namespace App\Classes;

class Database {
    private $ip;
    private $login;
    private $password;
    private $db;

    protected function Connect(){
        $this->ip = "localhost:3307";
        $this->login = "root";
        $this->password = "";
        $this->db = "productsscand";

        $conn = new \mysqli($this->ip, $this->login,
        $this->password, $this->db);

        return $conn;
    }
}

?>