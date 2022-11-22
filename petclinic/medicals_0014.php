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
    // $querymed = "SELECT * FROM medicals_0014 WHERE pet_id_0014='$_GET[pet_id]'";
    $querymed = "SELECT * FROM medicals_0014 AS m, doctors_0014 AS d WHERE m.pet_id_0014='$_GET[pet_id]' AND m.doctor_id_0014 = 
    d.doctors_id_0014";
    $medicals = mysqli_query($db_connection, $querymed);
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
    </table>
    <p><a href="add_medical_0014.php?pet_id=<?= $data1[
        'pet_id_0014'
    ] ?>">Add New Records</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Symptom</th>
            <th>Diagnose</th>
            <th>Treatment</th>
            <th>Coast ($)</th>
        </tr>
        <?php if (mysqli_num_rows($medicals) > 0) {
            $i = 1;
            foreach ($medicals as $data2): ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= date(
                'l, d M Y H:i:s',
                strtotime($data2['mr_date_0014'])
            ) ?></td>
            <td><?= $data2['doctors_name_0014'] ?></td>
            <td><?= $data2['symptom_0014'] ?></td>
            <td><?= $data2['diagnose_0014'] ?></td>
            <td><?= $data2['treatment_0014'] ?></td>
            <td><?= $data2['cost_0014'] ?></td>
        </tr>
        <?php endforeach;
        } else {
             ?>
        <tr><td colspan="7" align="center">No Records !</td></tr>
        <?php
        } ?>
    </table>
    <p><a href="read_pet_0014.php">Back to Pet List</a></p>
</body>
</html>