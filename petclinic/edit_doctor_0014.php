<!DOCTYPE html>
<html lang="en">
<head>
   <title>Pet Clinic Daffa</title>
</head>
<body>
    <h1>Daffa Pet Clinic</h1>
    <h3>Form edit Doctor</h3>
    <?php
    include 'connection_0014.php';
    $query = "SELECT * FROM doctors_0014 WHERE doctors_id_0014='$_GET[id]'";
    $pet = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_doctors_0014.php">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="doctors_name_0014" value="<?= $data[
                    'doctors_name_0014'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>gender</td>
                <td>
                    <input type="radio" name="doctors_gender_0014" value="male" <?= $data[
                        'doctors_gender_0014'
                    ] == 'male'
                        ? 'checked'
                        : '' ?> require> male
                    <input type="radio" name="doctors_gender_0014" value="female" <?= $data[
                        'doctors_gender_0014'
                    ] == 'female'
                        ? 'checked'
                        : '' ?> require> female
                </td>
            </tr>
            <tr>
                <td>address</td>
                <td><textarea name="doctors_address_0014"><?= $data[
                    'doctors_address_0014'
                ] ?></textarea>
            </td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="text" name="doctors_phone_0014" value="<?= $data[
                    'doctors_phone_0014'
                ] ?>"require></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="save" require>
                    <input type="reset" name="reset" value="reset" require>
                    <input type="hidden" name="doctors_id_0014" value="<?= $data[
                        'doctors_id_0014'
                    ] ?>" 
                    require>
                </td>
            </tr>
        </table>
        <p><a href="read_doctor_0014.php">CANCEL</a></p>
    </form>
</body>
</html>