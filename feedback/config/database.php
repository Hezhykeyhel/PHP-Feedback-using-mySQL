<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'Egbetayo');
define('DB_PASS', '1996');
define('DB_NAME', 'php_dev');


// Create Connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check COnnection

if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}
