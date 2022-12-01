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
    <title>Pet Clinic Daffa</title>
    <style>
    <?php include 'style_add.css';
    ?>
    </style>
</head>

<body>
    <div class="navbar">
        <div>
            <h1>Daffa Pet Clinic</h1>
        </div>
        <div>
            <img src="nhhs.png" alt="" id="imageH" />
        </div>
    </div>
    <div class="container">
        <div class="inputD">
            <form method="post" action="create_user_0014.php">
                <table>
                    <tr>
                        <td>
                            <h1>Form Add User</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username_0014" require></td>
                    </tr>
                    <tr>
                        <td>User type</td>
                        <td>
                            <input type="radio" name="usertype_0014" value="Staff" require> Staff
                            <input type="radio" name="usertype_0014" value="Manager" require> Manager
                        </td>
                    </tr>
                    <tr>
                        <td>Fullname</td>
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
        </div>
    </div>
</body>

</html>