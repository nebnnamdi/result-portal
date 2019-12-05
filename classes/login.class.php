<?php

session_start();

    class Login extends Db{

        private $uname;
        private $pwd;

        public function __construct($uname, $pwd){
            $this->uname = $uname;
            $this->pwd = $pwd;
        }

        public function access(){

            //create connection
            $conn = new Db();
            $newConn = $conn->connect();

            //make prepared statement bind result
            $stmt = $newConn->prepare("SELECT id, uname, pwd, fname, mname FROM users WHERE uname=?");
            $stmt->bind_param("s", $this->uname);
            $stmt->execute();
            $stmt->bind_result($uid, $dbuname, $dbpwd, $dbfname, $dbmname);
            $stmt->store_result();

            //check and login user
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
