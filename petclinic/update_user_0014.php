<?php

if (isset($_POST['save'])) {
    include 'connection_0014.php';

    $query = "UPDATE users_0014 SET
              username_0014 = '$_POST[username_0014]',
              usertype_0014 = '$_POST[usertype_0014]',
              fullname_0014 = '$_POST[fullname_0014]'
              WHERE userid_0014 = '$_POST[userid_0014]';
              ";

    $update = mysqli_query($db_connection, $query);

    if ($update) {
        echo '<p>pet update successfully ! </p>';
    } else {
        echo '<p>pet update failed ! </p>';
    }
} ?>
<p><a href="read_user_0014.php">BACK TO PETS LIST</a></p>    