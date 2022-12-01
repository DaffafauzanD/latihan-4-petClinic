<?php
if (isset($_POST['save'])) {
    include 'connection_0014.php';

    $password = password_hash($_POST['usertype_0014'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users_0014 (username_0014, password_0014, usertype_0014, fullname_0014) VALUES ('$_POST[username_0014]', '$password', '$_POST[usertype_0014]', '$_POST[fullname_0014]')";

    $create = mysqli_query($db_connection, $query);

    if ($create) {
        echo "<script> alert('users added succesfully !'); </script>";
    } else {
        echo "<script> alert('users add failed !'); </script>";
    }
} ?>

<script>
window.location.replace("read_user_0014.php");
</script>