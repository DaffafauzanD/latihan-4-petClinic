<?php
$db_host = 'localhost';
$db_username = 'id19790617_daplelovepet';
$db_password = 'qCP&^m!^fu69[lVm';
$db_name = 'id19790617_petclinic';

($db_connection = mysqli_connect($db_host, $db_username, $db_password)) or
    die();

mysqli_select_db($db_connection, $db_name);

?>
