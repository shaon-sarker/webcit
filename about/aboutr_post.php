<?php 
session_start();
require '../db.php';

    $heading = $_POST['heading'];
    $description = $_POST['description'];

    $uploaded_file= $_FILES['aboutr_pic'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
     $extension = end($after_explode);
     $allowed_extesion = array('jpeg','jpg','png','svg','gif');

if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] <= 600000) {
                $insert = "INSERT INTO aboutsright(heading,description) VALUES('$heading','$description')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/aboutr/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE aboutsright SET aboutr_pic='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['aboutr_content'] = "About Right Section Add  Succesessfully";
                header('location:/webcit/about/add_about_right.php');
            
        } 
       
    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/webcit/about/add_about_right.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/webcit/about/add_about_right.php');
   }
   







?>