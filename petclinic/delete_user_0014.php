<?php

if (isset($_GET['id'])) {
    include 'connection_0014.php';

    $query = "DELETE FROM users_0014 WHERE userid_0014 = '$_GET[id]'";

    $delete = mysqli_query($db_connection, $query);

    if ($delete) {
        echo '<p>pet delete successfully ! </p>';
    } else {
        echo '<p>pet delete failed ! </p>';
    }
} ?>
<p><a href="read_user_0014.php">BACK TO PETS LIST</a></p>    