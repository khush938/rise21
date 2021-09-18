<?php


// Initialize the session
session_start();

//include 'cookielogin.php';

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['sid']) || empty($_SESSION['sid'])){
  header('location:login');
}

include '../../db/mysql.php';
?>    
