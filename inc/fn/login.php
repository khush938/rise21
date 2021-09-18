<?php 
    include '../../db/mysql.php';

    if(!isset($_POST['sid']) || !isset($_POST['pass'])){
        echo 'Error 101';
    }
    $sid = $_POST['sid'];
    $pass = $_POST['pass'];
    
    $sidq = mysql_safe_query('SELECT password FROM users WHERE sid = %s', $sid);
    if(mysql_num_rows($sidq)==0){
        echo 0;
        exit;
    }
    $row = mysql_fetch_assoc($sidq);
    if($row['password']==$pass){
        echo 1;
        session_start();
        $_SESSION['sid'] = $sid;
    }else{
        echo 2;
    }
?>