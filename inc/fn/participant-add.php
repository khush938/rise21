<?php
include 'auth.php';
/* Getting file name */
$check =  mysql_safe_query('SELECT * FROM participants WHERE sid = %s',$_SESSION['sid']);
if(mysql_num_rows($check)==8){
   echo 'Oof well tried ;) You Have Passed Maximum Participants';
   exit;
}
if(!isset($_FILES['file']) || !isset($_POST['student-name']) || !isset($_POST['student-class'])){
   echo 'Please Enter All Details';
   exit;
}
$filename = $_FILES['file']['name'];

/* Location */
$location = "upload/".rand(10000,100000000).$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}

if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
      echo 1;
      $filelocation = $location;
   }else{
      echo 0;
   }
}
$name = $_POST['student-name'];
$class = $_POST['student-class'];
if($class != 9 && $class != 10 && $class != 11 && $class != 12){
   echo 'Only students of classes 9 - 12 are allowed';
   exit;
}
$query = mysql_safe_query('INSERT INTO participants (sid,pname,pclass,pimg) VALUES (%s,%s,%s,%s)',$_SESSION['sid'],$name,$class,$filelocation);
if($query){
    echo '1';
}else{
    echo '0';
}
?>