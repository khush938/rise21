<?php
    include 'auth.php';
    $query = mysql_safe_query('SELECT * FROM participants WHERE sid = %s', $_SESSION['sid']);
    while($row = mysql_fetch_assoc($query)){
        echo '[.]';
        echo $row['pname'];
        echo '[ . ]';
        echo $row['pclass'];
        echo '[ . ]';
        echo $row['pid'];
        echo '[ . ]';
        echo $row['pimg'];
    }
?>