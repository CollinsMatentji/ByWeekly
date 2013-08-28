<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PHPClass
 *
 * @author Mmile Jerry Mahlare
 */
require 'dbconn.class.php';
class User {
    //put your code here
    var $username;
    var $email;
    var $password;
    function  __construct($username, $email, $addr,$password) {
       $this->username = $username;
       $this->email = $email;
       $this->password = $password;
    }
    function  setPassword(){
        return md5($this->password);
    }
    function disUserInfo(){
        $info = "Username: ".$this->username;
        $info .= "<br/>E-mail: ".$this->email;
        return $info;
    }
    function save(){
        $dbconn = new DatabaseConnection("localhost", "root", "");
        $query = "insert into assignment_users.users values(null,'".$this->username."','".$this->email."','".$this->setPassword()."')";
        if(!$dbconn->execute($query)){
            return  "Could not save";
        }
    }
}
?>
