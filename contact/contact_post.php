<?php 

session_start();
require '../db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if(empty($name)){
    $_SESSION['name_err'] = "Name is required";
    header('Location:../index.php');
    
}
else if(empty($email)){
    $_SESSION['email_err'] = "Email is required";
    header('Location:../index.php');
}

else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $_SESSION['email_err'] = "Email is required";
    header('Location:../index.php');
}
else if(empty($subject)){
    $_SESSION['subject_err'] = "Subject is required";
    header('Location:../index.php');
}
else if(empty($message)){
    $_SESSION['message_err']= "Message is required";
    header('Location:../index.php');
}
else{
    $insert = "INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
    $result_contact = mysqli_query($db_conn, $insert);
    $_SESSION['contact_success'] = "Submit Successfully";
    header('location:../index.php#contact_part');
}










?>