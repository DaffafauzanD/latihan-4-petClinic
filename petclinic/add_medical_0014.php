<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pet Clinic Daffa</h1>
    <h3>Medical Records</h3>
    <?php
    include 'connection_0014.php';
    $querypet = "SELECT * FROM pets_0014 WHERE pet_id_0014='$_GET[pet_id]'";
    $pet = mysqli_query($db_connection, $querypet);
    $data1 = mysqli_fetch_assoc($pet);
    $querydoc = 'SELECT * FROM doctors_0014';
    $doctor = mysqli_query($db_connection, $querydoc);
    ?>
    <table>
        <tr>
            <td>Pet Id/Name</td>
            <td>: <?= $data1['pet_id_0014'] ?> / <?= $data1[
     'pet_name_0014'
 ] ?> </td>
        </tr>
        <tr>
            <td>Pet Type/Gender/Age</td>
            <td>: <?= $data1['pet_type_0014'] ?> / <?= $data1[
     'pet_gender_0014'
 ] ?> / <?= $data1['pet_age_0014'] ?></td>
        </tr>
        <tr>
            <td>Owner</td>
            <td>: <?= $data1['pet_owner_0014'] ?> / <?= $data1[
     'pet_address_0014'
 ] ?> / <?= $data1['pet_phone_0014'] ?></td>
        </tr>
    </table><hr>
    <form method="post" action="create_medical_0014.php">
        <table>
            <tr>
                <td>Doctor</td>
                <td>
                    <select name="doctors_id_0014" required>
                        <option value="">choose</option>
                        <?php foreach ($doctor as $data2): ?>
                        <option value="<?= $data2[
                            'doctors_id_0014'
                        ] ?>"><?= $data2['doctors_name_0014'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>symptom</td>
                <td><textarea name="symptom_0014"required></textarea></td>
            </tr>
            <tr>
                <td>diagnose</td>
                <td><textarea name="diagnose_0014"required></textarea></td>
            </tr>
            <tr>
                <td>treatment</td>
                <td><textarea name="treatment_0014"required></textarea></td>
            </tr>
            <tr>
                <td>cost</td>
                <td><input type="number" name="cost_0014" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="pet_id_0014" value="<?= $data1[
                        'pet_id_0014'
                    ] ?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="medicals_0014.php?pet_id=<?= $data1[
        'pet_id_0014'
    ] ?>">cancel</a></p>
</body>
</html>