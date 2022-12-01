<?php
session_start();
if (isset($_POST['login'])) {
    include 'connection_0014.php';

    $query = "SELECT * FROM users_0014 WHERE username_0014='$_POST[username_0014]'";
    $login = mysqli_query($db_connection, $query);

    if (mysqli_num_rows($login) > 0) {
        $user = mysqli_fetch_assoc($login);
        if (password_verify($_POST['password_0014'], $user['password_0014'])) {
            $_SESSION['login'] = true;
            $_SESSION['userid'] = $user['userid_0014'];
            $_SESSION['username'] = $user['username_0014'];
            $_SESSION['password'] = $user['password_0014'];
            $_SESSION['usertype'] = $user['usertype_0014'];
            $_SESSION['fullname'] = $user['fullname_0014'];

            echo "<script>alert('login success !');window.location.replace('index.php');</script>";
        } else {
            echo "<script>alert('Login failed, wrong password !');window.location.replace('form_login_0014.php');</script>";
        }
    } else {
        echo "<script>alert('login failed, user not found !');window.location.replace('form_login_0014.php');</script>";
    }
}
?>