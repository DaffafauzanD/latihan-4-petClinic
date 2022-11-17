<!DOCTYPE html>
<html lang="en">
<head>
   <title>Pet Clinic Daffa</title>
</head>
<body>
    <h1>Daffa Pet Clinic</h1>
    <h3>Form edit Pet</h3>
    <?php
    include 'connection_0014.php';
    $query = "SELECT * FROM users_0014 WHERE userid_0014='$_GET[id]'";
    $doctors = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($doctors);
    ?>
    <form method="post" action="update_password_0014.php">
        <table>
            <tr>
                <td>password</td>
                <td><input type="text" name="password_0014" value="<?= $data[
                    'password_0014'
                ] ?>" require></td>
            </tr>
            <tr>
			    <td></td>
			    <td>
				    <input type="submit" name="save" value="SAVE">
				    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="userid_0014" value="<?= $data[
                        'userid_0014'
                    ] ?>">
			    </td>
		    </tr>
        </table>
        <p><a href="read_user_0014.php">CANCEL</a></p>
    </form>
</body>
</html>