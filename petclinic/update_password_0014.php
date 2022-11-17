<?php
if (isset($_POST['save'])) {
    include 'connection_0014.php';
    $query = "UPDATE users_0014 SET password_0014 = '$_POST[password_0014]'
              WHERE userid_0014 = '$_POST[userid_0014]'";

    $update = mysqli_query($db_connection, $query);

    if ($update) {
        echo "<script> alert ('Password Update successfully !');</script>";
    } else {
        echo "<script> alert ('Password update Failed !');</script>";
    }
} ?>
<script>window.location.replace("read_user_0014.php");</script>