<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert ('Please login first !');window.location.replace('form_login_0014.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pet Clinic Daffa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <div><img src="nhhs.png" alt="" id="imageH"></div>
    </div>
    <div class="container">
        <div class="inputD" style="overflow-x:auto;">
            <form method="post" action="create_doctor_0014.php">
                <table>
                    <tr>
                        <td>
                            <h1>Form Add Doctor</h1>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Name</td>
                        <td><input type="text" name="doctors_name_0014" require></td>
                    </tr>
                    <tr>
                        <td><b>Gender</td>
                        <td>
                            <input type="radio" name="doctors_gender_0014" value="male" require> Male
                            <input type="radio" name="doctors_gender_0014" value="female" require> Female
                        </td>
                    </tr>
                    <tr>
                        <td><b>Address</td>
                        <td><textarea name="doctors_address_0014" class="textarea"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Phone</td>
                        <td><input type="text" name="doctors_phone_0014" require></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="save" value="save" require>
                            <input type="reset" name="reset" value="reset" require>
                        </td>
                    </tr>
                </table>
                <p><a href="read_doctor_0014.php">CANCEL</a></p>
            </form>
        </div>
    </div>
</body>

</html>