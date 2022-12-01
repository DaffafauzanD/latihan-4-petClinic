<!DOCTYPE html>
<html>

<head>
    <title>Pet Clinic Daffa</title>
</head>

<body>
    <h1>Daffa Pet Clinic</h1>
    <hr>
    <h3>Change Password</h3>
    <form method="post" action="update_password_0014.php">
        <table>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="New_password_0014" id="new" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input type="checkbox" onclick="show()">Show password</td>
            </tr>
            <td>&nbsp;</td>
            <td>&nbsp;
                <input type="submit" name="change" value="CHANGE">
                <input type="reset" name="reset" value="RESET">
            </td>
            </tr>
        </table>
    </form>
    <script>
    function show() {
        var x = document.getElementById("new");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <p><a href="index.php">CANCEL</a></p>
</body>

</html>