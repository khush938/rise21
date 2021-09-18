<?php
    include 'auth.php';
    $pid = $_POST['pid'];
    $squery = mysql_safe_query('SELECT sid FROM participants WHERE pid = %s', $pid);
    if(!mysql_num_rows($squery)){
        exit;
    }
    $query = mysql_safe_query('SELECT * FROM participation,events WHERE participation.partin = events.eid AND participation.participant = %s', $pid);
    while($row = mysql_fetch_assoc($query)){
        echo $row['ename'].',';
    }
?>