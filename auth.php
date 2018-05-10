<?php
session_start();
require_once('./user_data.php');

$username = $_POST['username']; 
$password =$_POST['password'];

if(isset($user_data[$username]) && $user_data[$username]['password']=== $password){
  $user = $user_data[$username];
  // echo "<h1> User is authorized $user[name]</h1>"; 
   unset($user['password']);
   $_SESSION['user'] = $user; 
   header('location: ./profile.php');
   exit();
}else{
  echo '<h1> Access Denied</h1>';
}
// print_r($_POST);


