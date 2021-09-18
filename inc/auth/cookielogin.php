<?php
    if(isset($_COOKIE['prelog'])){
        $token = $_COOKIE['prelog'];
        $url = 'http://'.$_SERVER['SERVER_NAME'].'/auth/inc/fn/cookie-login.php';
        $data = array('token'=> $token);
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
        if($str_arr[0] == '1'){
            $_SESSION['username'] =  $str_arr[1];
        }        
    }
?>