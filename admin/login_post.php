<?php
session_start();
require '../db.php';


$email = $_POST['email'];
$password = $_POST['password'];

$select="SELECT COUNT(*) as login_email,username,email,role FROM admins WHERE email='$email'";
$select_result = mysqli_query ($db_conn,$select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['login_email'] == 1){
  $select2 = "SELECT * FROM admins WHERE email ='$email'"; 
  $select_result2 = mysqli_query($db_conn,$select2);
  $after_assoc2 = mysqli_fetch_assoc($select_result2);
  if(password_verify($password,$after_assoc2['password'])){
        $_SESSION['success'] = "Successfully login!";
        $_SESSION['username'] = $after_assoc['username'];
        // $_SESSION['user_image'] = $after_assoc['user_image'];
        // $_SESSION['password'] = $after_assoc['password'];
        $_SESSION['email'] = $after_assoc['email'];
        // $_SESSION['birthday'] = $after_assoc['birthday'];
        $_SESSION['role'] = $after_assoc['role'];
        // $_SESSION['id'] = $after_assoc['id'];
        header('location:/webcit/dashboad.php');
  }
  else{
    $_SESSION['invalid'] = "Invalid password!";
    header('location:login.php');
  }

}

else{
    $_SESSION['invalid'] = "Invalid email or password!";
    header('location:login.php');
}



?>