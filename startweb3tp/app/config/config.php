<?php

$protocol = "http://";
if(isset($_SERVER['HTTPS'])){
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://';
}

define('PREFIX',  '/startweb3tp/');
define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . PREFIX);
define ('PASS_SALT', 'xyz234@');