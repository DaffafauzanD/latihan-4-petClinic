<!DOCTYPE html>
<html lang="en">
<head>
   <title>Pet Clinic Daffa</title>
</head>
<body>
    <h1>Daffa Pet Clinic</h1>
    <h3>Form edit user</h3>
    <?php
    include 'connection_0014.php';
    $query = "SELECT * FROM users_0014 WHERE userid_0014='$_GET[id]'";
    $pet = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_user_0014.php">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username_0014" value="<?= $data[
                    'username_0014'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>usertype</td>
                <td>
                    <input type="radio" name="usertype_0014" value="Staff" <?= $data[
                        'usertype_0014'
                    ] == 'Staff'
                        ? 'checked'
                        : '' ?> require> Staff
                    <input type="radio" name="usertype_0014" value="Manager" <?= $data[
                        'usertype_0014'
                    ] == 'Manager'
                        ? 'checked'
                        : '' ?> require> Manager
                </td>
            </tr>
            <tr>
                <td>fullname</td>
                <td><input type="text" name="fullname_0014" value="<?= $data[
                    'fullname_0014'
                ] ?>"require></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="save" require>
                    <input type="reset" name="reset" value="reset" require>
                    <input type="hidden" name="userid_0014" value="<?= $data[
                        'userid_0014'
                    ] ?>" 
                    require>
                </td>
            </tr>
        </table>
        <p><a href="read_user_0014.php">CANCEL</a></p>
    </form>
</body>
</html>