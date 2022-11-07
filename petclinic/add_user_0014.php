<!DOCTYPE html>
<html lang="en">
<head>
   <title>Pet Clinic Daffa</title>
</head>
<body>
    <h1>Daffa Pet Clinic</h1>
    <h3>Form add User</h3>
    <form method="post" action="create_user_0014.php">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username_0014" require></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password_0014" require></td>
            </tr>
            <tr>
                <td>usertype</td>
                <td>
                    <input type="radio" name="usertype_0014" value="male" require> Staff
                    <input type="radio" name="usertype_0014" value="female" require> Manager
                </td>
            </tr>
            <tr>
                <td>fullname</td>
                <td><input type="text" name="fullname_0014" require></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="save" require>
                    <input type="reset" name="reset" value="reset" require>
                </td>
            </tr>
        </table>
        <p><a href="read_user_0014.php">CANCEL</a></p>
    </form>
</body>
</html>