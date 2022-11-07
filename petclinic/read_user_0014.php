<!DOCTYPE html>
<html lang="en">
<head>
    <title>pet clinic daffa</title>
</head>
<body>
    <h1>pet clinic daffa</h1>
    <h3>User list</h3>
    <p><a href="add_user_0014.php">add new user</a></p>
    <table border="1">
        <tr>
            <th>no</th>
            <th>username</th>
            <th>usertype</th>
            <th>fullname</th>
            <th colspan = "3">action</th>
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
            ] ?>"onclick = "return confirm ('are you sure ?')">delete user</a></td>
            <td><a href="reset_password_0014.php">reset password</a></td>
        </tr>
        <?php endforeach;
        ?>
    </table>
    <p><a href="index.php">BACK TO THE MENU</p>
</body>
</html>