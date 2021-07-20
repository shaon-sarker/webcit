<?php 
session_start();
require '../db.php';

    $category_name = $_POST['category_name'];
  
    $insert = "INSERT INTO categorys(category_name) VALUES('$category_name')";
    $result = mysqli_query($db_conn, $insert);
    $_SESSION['category_content'] = "Category Add Succesfully";
    header('location:add_category.php');

?>