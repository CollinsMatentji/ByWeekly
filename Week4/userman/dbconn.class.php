<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbconn
 *
 * @author Mmile Jerry Mahlare
 */
class DatabaseConnection {
    //put your code here
    var $server;
    var $username;
    var $password;
    function  __construct( $server,$username, $password) {
        $this->database = $server;
        $this->username = $username;
        $this->password = $password;
    }
    function establishConn(){
        $conn = mysql_connect($this->server, $this->username, $this->password);
        return $conn;
    }
    function execute($query){
        mysql_query($query, $this->establishConn());
        return mysql_affected_rows();
    }
}
?>
