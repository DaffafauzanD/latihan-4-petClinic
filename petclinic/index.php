<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert ('Please login first !');window.location.replace('form_login_0014.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Pet Clinic Daffa</title>
    <style>
    <?php include 'style.css';
    ?>
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <h1>Pet Clinic Daffa</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="read_pet_0014.php">Data Pet </a></li>
                <li><a href="read_doctor_0014.php">Data Doctors </a></li>
                <?php if ($_SESSION['usertype'] == 'Manager') { ?>
                <li><a href="read_user_0014.php">User </a></li><?php } ?>
                <li><a href="change_password_0014.php">Change Password</a></li>
                <li><a href="logout_0014.php">Logout</a></li>
            </ul>
        </div>
    </div>
</body>
<div class="body">
    <div class="heading">
        <h1>Welcome <?= $_SESSION['fullname'] ?>, you login as <?= $_SESSION[
    'usertype'
] ?></h1>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore veritatis neque pariatur, cum repellat
            dolore </p>
        <br>
        <br>
        <a href="#">selengkapnya</a>
    </div>
</div>

</html>