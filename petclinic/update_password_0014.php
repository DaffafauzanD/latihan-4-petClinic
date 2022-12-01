<?php
session_start();
if (isset($_POST['change'])) {
    include 'connection_0014.php';
    $password = password_hash($_POST['New_password_0014'], PASSWORD_DEFAULT);
    $query = "UPDATE users_0014 SET password_0014='$password' WHERE userid_0014='$_SESSION[userid]'";

    $update = mysqli_query($db_connection, $query);

    if ($update) {
        echo "<script> alert ('Change password successfully !');window.location.replace('index.php');</script>";
    } else {
        echo "<script> alert ('Change password failed !');window.location.replace('change_password_0014.php);</script>";
    }
}
?>
<script>
window.location.replace("index_0014.php");
</script>