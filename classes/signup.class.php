<?php

class Signup extends Db{

    private $firstName;
    private $middleName;
    private $lastName;
    private $address;
    private $tel;
    private $email;
    private $fax;
    private $username;
    private $password;

    public function __construct($firstName, $middleName, $lastName, $address, $tel, $email, $fax, $username, $password){
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->tel = $tel;
        $this->email = $email;
        $this->fax = $fax;
        $this->username = $username;
        $this->password = $password;
    }

    public function register(){

        //create new connection
        $conn = new Db();
        $newConn = $conn->connect();

        //hash the password
        $hashedPwd = password_hash($this->password, PASSWORD_DEFAULT);

        //prepared statement
        $stmt = $newConn->prepare("INSERT INTO users (fname, mname, lname, addr, tel, email, fax, uname, pwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
        
        $stmt->bind_param("sssssssss", $this->firstName, $this->middleName, $this->lastName, $this->address, $this->tel, $this->email, $this->fax, $this->username, $hashedPwd);

        //check and execute
        try {
            $stmt->execute();
            header("Location: ../index.php?signup=Success");
            exit();
        } catch (TypeError $th) {
            die("Execution failed"." ". $th->showMessage());
            exit();
        }
    }
}