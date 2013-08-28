<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require 'user.class.php';
$user = new User("raymond", "ray@mail.com", "3046 Block L","password");
//echo $user->disUserInfo()."<br />";
//echo $user->setPassword();
$user->save();
?>
