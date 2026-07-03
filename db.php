<?php
// DB connection
$connection = new mysqli("localhost", "root", "", "lamedicale");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Set charset to UTF-8
$connection->set_charset("utf8");
?>