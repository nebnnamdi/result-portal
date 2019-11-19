<?php

    class Login extends Db{

        private $uname;
        private $pwd;

        public function __construct($uname, $pwd){
            $this->uname = $uname;
            $this->pwd = $pwd;
        }

        public function access(){

            $conn = new Db();
            $newConn = $conn->connect();

            $stmt = $newConn->prepare("SELECT id, uname, pwd, fname, mname FROM users WHERE uname=?");
            $stmt->bind_param("s", $this->uname);
            $stmt->execute();
            $stmt->bind_result($uid, $dbuname, $dbpwd, $dbfname, $dbmname);
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                while ($stmt->fetch()) {
                    if (password_verify($this->pwd, $dbpwd) != true) {
                        header("Location: ../signin.php?=invalid user");
                        exit();
                        exit();
                    } elseif (password_verify($this->pwd, $dbpwd) == true) {
                        session_start();
                        $_SESSION['uid'] = $uid;
                        $_SESSION['uname'] = $dbuname;
                        header("Location: ../home.php?=$uid&");
                        exit();
                        }
                }
            } else {
                header("Location: ../signin.php?=invalid user&");
                exit();
            }
        }
    }

    /* 

    $sql = "SELECT * FROM users where uname='$this->uname'";
            $result = $newConn->query($sql);
            $resultCheck = $result->num_rows; 


    if($resultCheck < 1){
                header("Location: ../signin.php?signin=invalid");
                exit();
            } else {
                if ($data = $result->fetch_assoc()) {
                    if($this->pwd != $data['pwd']){
                        header("Location: ../signin.php?signin=invalid_user");
                        exit();
                    } elseif ($this->pwd == $data['pwd']) {
                        echo 'Welcome, '.$data['fname'];
                        exit();
                    } 
                } 
            }



            $stmt1 = $newConn->prepare("SELECT uname, pwd, fname FROM users WHERE uname=? AND pwd=?");
            $stmt1->bind_param("ss", $this->uname, $this->pwd);
            $stmt1->execute();
            $stmt1->bind_result($dbuname, $dbpwd);
            $stmt1->store_result();

            if ($stmt1->num_rows > 0) {
                echo 'Success';
            } else {
                echo 'Wrong';
            }


    


            

    */