<?php

$db['db_host'] = 'localhost'; 
$db['db_user'] = 'root';
$db['db_pass'] = 'root';
$db['db_name'] = 'devocs-cms';

foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($connection){
    echo 'Connection to ' . $db[db_name] . ' successful!';
}

// Check connection error(s)
if (mysqli_connect_errno())
  {
  echo "! Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>