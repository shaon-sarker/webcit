<?php  
session_start();
require '../db.php';

    $work_title = $_POST['work_title'];
    $work_subtitle = $_POST['work_subtitle'];
    $category_no = $_POST['category_no'];

    $uploaded_file= $_FILES['work_photo'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
    $extension = end($after_explode);
    $allowed_extesion = array('jpeg','jpg','png','svg','gif');

    if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] <= 600000) {
                $insert = "INSERT INTO works(work_title,work_subtitle,category_no) VALUES('$work_title','$work_subtitle','$category_no')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/works/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE works SET work_photo='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['work_content'] = "Work Add  Succesessfully";
                header('location:/webcit/works/add_work.php');
            
        } 
       
    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/webcit/works/add_work.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/webcit/works/add_work.php');
}
   










?>