<?php 
session_start();
require '../db.php';

    $uploaded_file= $_FILES['video_title'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
     $extension = end($after_explode);
     $allowed_extesion = array('mp4','3gp');

if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] >= 600000) {
                $insert = "INSERT INTO videos(video_title) VALUES('$uploaded_file_name')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/videos/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE videos SET video_title='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['logo_content'] = "video Add  Succesessfully";
                header('location:/webcit/video/add_video.php');
            
        } 
       
    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/webcit/video/add_video.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/webcit/video/add_video.php');
   }
   







?>