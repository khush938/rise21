<?php
include 'db/dbvar.php';
/*
Database Connection settings will be defined  hare
*/

define('SPHOST',$dbhost);
define('SPUSER',$dbuser);
define('SPPASS',$dbpass);
define('SPDB',$db);

$sp=new mysqli(SPHOST,SPUSER,SPPASS,SPDB);

if($sp->connect_errno){
	echo "Check Host Connection<br/>";
}
?>
