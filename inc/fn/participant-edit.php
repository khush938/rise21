<?php
    include 'auth.php';
    $pid = $_POST['pid'];
    $input = $_POST['eids'];
    $eids = explode(",",$input);
    $i = 0;
    mysql_safe_query('DELETE FROM participation WHERE participant = %s', $pid);
    while((count($eids) - 1) >= $i){
        
        $eid = $eids[$i];
        $check = mysql_safe_query('SELECT * FROM participation WHERE partin = %s AND participant = %s', $eid, $pid);
        if(!mysql_num_rows($check)){
            mysql_safe_query('INSERT INTO participation (partin,participant) VALUES (%s,%s)',$eid, $pid);
        }
        $i++;
    }
    
?>
