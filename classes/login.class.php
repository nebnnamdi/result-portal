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
                } elseif (password_verify($this->pwd, $dbpwd) == true) {
                    $_SESSION['uid'] = $uid;
                    $_SESSION['uname'] = $dbuname;
                    $_SESSION['fname'] = $dbfname;
                    $urlId = password_hash($uid, PASSWORD_DEFAULT);
                    header("Location: ../home.php?=success/dashboard/user/$urlId&/home");
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
    */