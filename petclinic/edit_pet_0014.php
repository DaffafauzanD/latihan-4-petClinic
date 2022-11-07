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
    $query = "SELECT * FROM pets_0014 WHERE pet_id_0014='$_GET[id]'";
    $pet = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_pet_0014.php">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="pet_name_0014" value="<?= $data[
                    'pet_name_0014'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>type</td>
                <td>
                    <select name="pet_type_0014" require>
                        <option value="">choose</option>
                        <option value="cat" <?= $data['pet_type_0014'] == 'cat'
                            ? 'selected'
                            : '' ?>>cat</option>
                        <option value="dog" <?= $data['pet_type_0014'] == 'dog'
                            ? 'selected'
                            : '' ?>>dog</option>
                        <option value="reptil" <?= $data['pet_type_0014'] ==
                        'reptil'
                            ? 'selected'
                            : '' ?>>reptil</option>
                        <option value="bird" <?= $data['pet_type_0014'] ==
                        'bird'
                            ? 'selected'
                            : '' ?>>bird</option>
                        <option value="rondent" <?= $data['pet_type_0014'] ==
                        'rondent'
                            ? 'selected'
                            : '' ?>>rodent</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>gender</td>
                <td>
                    <input type="radio" name="pet_gender_0014" value="male" <?= $data[
                        'pet_gender_0014'
                    ] == 'male'
                        ? 'checked'
                        : '' ?> require> male
                    <input type="radio" name="pet_gender_0014" value="female" <?= $data[
                        'pet_gender_0014'
                    ] == 'female'
                        ? 'checked'
                        : '' ?> require> female
                </td>
            </tr>
            <tr>
                <td>age</td>
                <td><input type="number" name="pet_age_0014" value="<?= $data[
                    'pet_age_0014'
                ] ?>"require></td>
            </tr>
            <tr>
                <td>owner</td>
                <td><input type="text" name="pet_owner_0014" value="<?= $data[
                    'pet_owner_0014'
                ] ?>"require></td>
            </tr>
            <tr>
                <td>address</td>
                <td><textarea name="pet_address_0014"><?= $data[
                    'pet_address_0014'
                ] ?></textarea>
            </td>
            </tr>
            <tr>
                <td>phone</td>
                <td><input type="text" name="pet_phone_0014" value="<?= $data[
                    'pet_phone_0014'
                ] ?>"require></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="save" require>
                    <input type="reset" name="reset" value="reset" require>
                    <input type="hidden" name="pet_id_0014" value="<?= $data[
                        'pet_id_0014'
                    ] ?>" 
                    require>
                </td>
            </tr>
        </table>
        <p><a href="read_pet_0014.php">CANCEL</a></p>
    </form>
</body>
</html>