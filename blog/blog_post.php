<?php 
session_start();
require '../db.php';

    $blog_title = $_POST['blog_title'];
    $blog_date = $_POST['blog_date'];
    $description = $_POST['blog_descrip'];

    $uploaded_file= $_FILES['blog_pic'];
    $uploaded_file_name = $uploaded_file['name'];
    $after_explode = explode('.',$uploaded_file_name);
     $extension = end($after_explode);
     $allowed_extesion = array('jpeg','jpg','png','svg','gif');

if(in_array($extension,$allowed_extesion)){
        if($uploaded_file['size'] <= 600000) {
                $insert = "INSERT INTO blogs(blog_title,blog_date,blog_descrip) VALUES('$blog_title','$blog_date','$description')";
                $result = mysqli_query($db_conn, $insert);

                $last_id = mysqli_insert_id($db_conn);
                $file_name = $last_id.'.'.$extension;
                $new_location = '../uploads/blogs/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $uploaded_photo_name = "UPDATE blogs SET blog_pic='$file_name' WHERE id=$last_id";
                $update_result= mysqli_query($db_conn,$uploaded_photo_name);
            
                $_SESSION['blog_content'] = "Blog Section Add  Succesessfully";
                header('location:/webcit/blog/add_blog.php');
            
        } 
       
    else{
        $_SESSION['image_size'] = "file size is too big";
        header('location:/webcit/blog/add_blog.php');
    }
}
   else{
    $_SESSION['image_format'] = "Invalid format";
    header('location:/webcit/blog/add_blog.php');
   }
   







?>