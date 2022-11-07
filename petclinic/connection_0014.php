<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'petclinic';

($db_connection = mysqli_connect($db_host, $db_username, $db_password)) or
    die();

mysqli_select_db($db_connection, $db_name);

?>
