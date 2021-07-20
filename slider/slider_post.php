<?php 
session_start();
require '../db.php';

    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $button = $_POST['button'];

    $uploaded_file= $_FILES['slider_pic'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
     $extension = end($after_explode);
     $allowed_extesion = array('jpeg','jpg','png','svg','gif');

if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] >= 600000) {
                $insert = "INSERT INTO sliders(heading,description,button) VALUES('$heading','$description','$button')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/sliders/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE sliders SET slider_pic='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['slider_content'] = "slider Add  Succesessfully";
                header('location:/webcit/slider/add_slider.php');
            
        } 
       
    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/webcit/slider/add_slider.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/webcit/slider/add_slider.php');
   }
   







?>