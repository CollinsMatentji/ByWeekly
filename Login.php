<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
 $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passvalidation = "/^([A-Z]){1,}+([a-z]){1,}+([0-9]){1,}+([\W_]){1,}+$/";
  if(!$firstname ||!$lastname ||!$email ||!$password)
  {
	   echo 'fill in the form';  
  }
  if(!preg_match("/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-]/",$email))
  {
     echo 'wrong email address';
  }
  else if(!preg_match("/^[a-zA-Z0-9]/",$lastname))
  {
    echo 'last name should atleast contain 10 letters';
  }
  else if(!preg_match("/^[a-zA-Z0-8]/",$firstname))
  {
     echo 'the first name should have atleast 7 letters';
  }
   else if(!preg_match($passvalidation,$password))
  {
    echo 'wrong password';
  }
  else
  {
  echo'thank you for registering successfully';
  }
  
  echo 'First name:'.$firstname.'Last name:'.$lastname.'email:'.$email.'Password:'.$password;
  
   
  
  
?>
</body>
</html>