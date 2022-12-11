<!DOCTYPE html>
<html>

<head>
    <title>Pet Clinic Daffa</title>
</head>

<body>
    <h1>Daffa Pet Clinic</h1>
    <hr>
    <h3>Change user photo</h3>
    <?php
    include 'connection_0014.php';
    $query = "SELECT * FROM users_0014 WHERE userid_0014='$_GET[id]'";
    $pet = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="user_upload_0014.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td><img src="uploads/users/<?= $data[
                    'user_photo_0014'
                ] ?>" alt="" width="100" height="100"></td>
            </tr>
            <tr>
                <td>new photo</td>
                <td>: <input type="file" name="new_user_photo_0014" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD">
                    <input type="hidden" name="user_photo_0014" value="<?= $data[
                        'user_photo_0014'
                    ] ?>">
                    <input type="hidden" name="userid_0014" value="<?= $data[
                        'userid_0014'
                    ] ?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_user_0014.php">CANCEL</a></p>
</body>

</html>