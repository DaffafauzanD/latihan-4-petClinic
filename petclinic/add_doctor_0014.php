<!DOCTYPE html>
<html lang="en">
<head>
   <title>Pet Clinic Daffa</title>
</head>
<body>
    <h1>Daffa Pet Clinic</h1>
    <h3>Form add Doctor</h3>
    <form method="post" action="create_doctor_0014.php">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="doctors_name_0014" require></td>
            </tr>
            <tr>
                <td>gender</td>
                <td>
                    <input type="radio" name="doctors_gender_0014" value="male" require> male
                    <input type="radio" name="doctors_gender_0014" value="female" require> female
                </td>
            </tr>
            <tr>
                <td>address</td>
                <td><textarea name="doctors_address_0014"></textarea>
            </td>
            </tr>
            <tr>
                <td>phone</td>
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
</body>
</html>