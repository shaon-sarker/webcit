<?php
session_start();
if(!isset($_SESSION['success'])){
  header('location:../admin/login.php');
}

?>