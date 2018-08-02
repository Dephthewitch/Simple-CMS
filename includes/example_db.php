<?php

$db['db_host'] = "hostname";
$db['db_user'] = "username";
$db['db_pass'] = "password";
$db['db_name'] = "DatabaseName";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection) {
    
    echo "We are
    connected";
}

?>