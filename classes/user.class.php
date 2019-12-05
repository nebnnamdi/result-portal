<?php

class User extends Db{

    public function profile(){
        $conn = new Db();
            $newConn = $conn->connect();

            //make prepared statement bind result
            $stmt = $newConn->prepare("SELECT id, uname, pwd, fname, mname, lname, addr, tel, email, fax FROM users WHERE uname=?");
            $stmt->bind_param("s", $_SESSION['uname']);
            $stmt->execute();
            $stmt->bind_result($uid, $dbuname, $dbpwd, $dbfname, $dbmname, $dblname, $dbaddr, $dbtel, $dbemail, $dbfax);
            $stmt->store_result();

        while ($stmt->fetch()) {
            $_SESSION['fname'] = $dbfname;
            $_SESSION['mname'] = $dbmname;
            $_SESSION['lname'] = $dblname;
            $_SESSION['addr'] = $dbaddr;
            $_SESSION['tel'] = $dbtel;
            $_SESSION['email'] = $dbemail;
            $_SESSION['fax'] = $dbfax;
        }
    }
}