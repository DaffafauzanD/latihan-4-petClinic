<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert ('Please login first !');window.location.replace('form_login_0014.php');</script>";
}
if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert ('Access Forbiden !');window.location.replace('index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>pet clinic daffa</title>
    <style>
    <?php include 'style_read.css';
    ?>
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <h1>Pet Clinic Daffa</h1>
        </div>
        <div>
            <h1>User list</h1>
        </div>
    </div>
    <div class="body">
        <div class="text">
            <ul>
                <li><a href="add_user_0014.php">ADD NEW USER</a></li>
                <li><a href="index.php">BACK TO THE MENU</a></li>
            </ul>
        </div>
        <div class="border">
            <table border="1" class="customers">
                <tr>
                    <th>no</th>
                    <th>username</th>
                    <th>usertype</th>
                    <th>fullname</th>
                    <th colspan="3">action</th>
                </tr>
                <?php
                include 'connection_0014.php';
                $query = 'SELECT * FROM users_0014';
                $pets = mysqli_query($db_connection, $query);

                $i = 1;
                foreach ($pets as $data): ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['username_0014']; ?></td>
                    <td><?php echo $data['usertype_0014']; ?></td>
                    <td><?php echo $data['fullname_0014']; ?></td>
                    <td><a href="edit_user_0014.php?id=<?= $data[
                        'userid_0014'
                    ] ?>">Edit user</a></td>
                    <td><a href="delete_user_0014.php?id=<?= $data[
                        'userid_0014'
                    ] ?>" onclick="return confirm ('are you sure ?')">delete user</a></td>
                    <td><a href="reset_password_0014.php?id=<?= $data[
                        'userid_0014'
                    ] ?>&type=<?= $data[
    'usertype_0014'
] ?>" onclick="return confirm ('are you sure ?')">reset password</a></td>
                </tr>
                <?php endforeach;
                ?>
            </table>
        </div>
    </div>
</body>

</html>