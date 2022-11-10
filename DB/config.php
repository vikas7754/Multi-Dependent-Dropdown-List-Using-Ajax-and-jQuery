<?php
//define parameters
$host = "localhost";
$port;
$login = "root";
$password = "root";
$database = "Ajax";

//Connect to the mysql server
$connect_webapps = @new mysqli($host, $login, $password, $database, $port);

//Handle connection errors 
if (mysqli_connect_errno() != 0) {
    $errno = mysqli_connect_errno();
    $errmsg = mysqli_connect_error();
    die("Connection Failed with: ($errno) $errmsg<br/>\n");
}
