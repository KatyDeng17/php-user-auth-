<?php
session_start();
require_once('./db_connect.php'); 
$username = $_POST['username']; 
$password =md5($_POST['password']); //encode the password; 

$query = "SELECT `username`, `user_level`, `name` from `users` WHERE `username` ='$username' AND `password` = '$password'";
// echo $query;
$result = mysqli_query($db, $query); 
if(mysqli_num_rows($result)){
  $user = mysqli_fetch_assoc($result);
  $_SESSION['user'] = $user;
  header('location: /profile.php');
  exit();
  // echo '<pre>';
  // print_r($user);
  // echo '</pre>';
}else{
  header('location: /?auth_error =true');
}
