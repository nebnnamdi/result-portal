<?php

class Db {
    private $server;
    private $user;
    private $pass;
    private $dbname;

    public function connect(){
        $this->server = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'result';
        
        $conn = new mysqli($this->server, $this->user, $this->pass, $this->dbname);
        return $conn;
    }
}