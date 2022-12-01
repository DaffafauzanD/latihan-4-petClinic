<?php
if (isset($_GET['id'])) {
    include 'connection_0014.php';
    $password = password_hash($_GET['type'], PASSWORD_DEFAULT);
    $query = "UPDATE users_0014 SET password_0014 = '$password'
              WHERE userid_0014 = '$_GET[id]'";

    $update = mysqli_query($db_connection, $query);

    if ($update) {
        echo "<script> alert ('Password Update successfully !');</script>";
    } else {
        echo "<script> alert ('Password update Failed !');</script>";
    }
} ?>
<script>
window.location.replace("read_user_0014.php");
</script>