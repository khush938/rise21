<?php
include 'auth.php';
/* Getting file name */
if(!isset($_POST['pid'])){
   exit;
}
$pid = $_POST['pid'];
$query = mysql_safe_query('DELETE FROM participants WHERE sid = %s AND pid = %s LIMIT 1',$_SESSION['sid'],$pid);
$query2 = mysql_safe_query('DELETE FROM participation WHERE participant = %s',$pid);
if($query){
    echo '1';
}else{
    echo '0';
}
?>