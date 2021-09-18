<?php
        $url = 'http://'.$_SERVER['SERVER_NAME'].'/auth/inc/fn/cookie-destroy.php';
        $data = array('token'=> 1);
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $str_arr = explode ("[,]", $result);
?>