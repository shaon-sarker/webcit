<?php 

session_start();
require '../db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash_password = password_hash($password,PASSWORD_DEFAULT);
$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$num = preg_match('@[0-9]@', $password);
$spsl = preg_match('@[#,$,%,^,&,*,(,)]@',$password);
$role = $_POST['role'];


if(empty($username)){
    $_SESSION['name_err'] = "Name is required";
    header('Location:/webcit/user/add_user.php');
    
}
else if(empty($email)){
    $_SESSION['email_err'] = "Email is required";
    header('Location:/webcit/user/add_user.php');
}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $_SESSION['email_err'] = "Email is required";
    header('Location:/webcit/user/add_user.php');
}
else if(empty($password)){
    $_SESSION['pass_err']= "Your Password is required";
    header('Location:/webcit/user/add_user.php');
}
else if(!$upper || !$lower || !$num || !$spsl || strlen($password) < 8){
    $_SESSION['pass_err'] = 'Password must be upper-case,lower-case,special char,number & must be 8 characters!';
    header('Location:/webcit/user/add_user.php');    

}
else if(empty($role)){
    $_SESSION['role_err']= "Role is required";
    header('Location:/webcit/user/add_user.php');
}
else{
    $insert = "INSERT INTO admins(username,email,password,role) VALUES('$username','$email','$hash_password','$role')";
    $insert_result = mysqli_query($db_conn,$insert);
    header('location:add_user.php');
   
}


?>