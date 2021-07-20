<?php 
session_start();
require '../db.php';

    $heading = $_POST['heading'];
    $sub_head = $_POST['sub_head'];
    $plan_title1 = $_POST['plan_title1'];
    $plan_title2 = $_POST['plan_title2'];
    $plan_title3 = $_POST['plan_title3'];
    $plan_title4 = $_POST['plan_title4'];
    $plan_title5 = $_POST['plan_title5'];


    $insert = "INSERT INTO plans(heading,sub_head,plan_title1,plan_title2,plan_title3,plan_title4,plan_title5) VALUES('$heading','$sub_head','$plan_title1','$plan_title2','$plan_title3','$plan_title4','$plan_title5')";
    $result = mysqli_query($db_conn, $insert);
    $_SESSION['plan_content'] = "plans Add Succesfully";
    header('location:add_plan.php');

                







?>