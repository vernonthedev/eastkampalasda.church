<?php
$server = 'localhost';
$user = 'root';
$database = 'eastkampala';
$password = '';



// $server = 'sql104.infinityfree.com';
// $user = 'if0_35256086';
// $database = 'if0_35256086_eastkampala';
// $password = 'OobD5RJox0R';

// SETTING PDO DSN
$dsn = 'mysql:host='.$server.';dbname='.$database;

//CREATION OF PDO INSTANCE
$conn = new PDO($dsn, $user, $password);
//SET THE DEFAULT OBJECT RETRIEVAL METHOD
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


?>

