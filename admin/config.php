<?php

// $server = 'eastkampalasda.church.mysql';
// $user = 'eastkampalasda_churchekc_home';
// $database = 'ekc_home';
// $password = 'EastSDA@@2024!';


$server = 'localhost';
$user = 'root';
$database = 'eastkampalasda';
$password = 'Codezilla@21';

// SETTING PDO DSN
$dsn = 'mysql:host='.$server.';dbname='.$database;

//CREATION OF PDO INSTANCE
$conn = new PDO($dsn, $user, $password);
//SET THE DEFAULT OBJECT RETRIEVAL METHOD
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>
