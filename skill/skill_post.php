<?php 
session_start();
require '../db.php';

    $skill_name = $_POST['skill_name'];
    $percentage = $_POST['percentage'];
    $skill_title = $_POST['skill_title'];

    $insert = "INSERT INTO skills(skill_name,percentage,skill_title) VALUES('$skill_name','$percentage','$skill_title')";
    $result = mysqli_query($db_conn, $insert);
    $_SESSION['skill_content'] = "Skills Add Succesfully";
    header('location:add_skill.php');

                







?>