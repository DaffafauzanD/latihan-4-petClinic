<!DOCTYPE html>
<html lang="en">
<head>
    <title>pet clinic daffa</title>
</head>
<body>
    <h1>pet clinic daffa</h1>
    <h3>Doctors list</h3>
    <p><a href="add_doctor_0014.php">add new pet</a></p>
    <table border="1">
        <tr>
            <th>no</th>
            <th>name</th>
            <th>gender</th>
            <th>address</th>
            <th>phone</th>
        </tr>
        <?php
        include 'connection_0014.php';
        $query = 'SELECT * FROM doctors_0014';
        $pets = mysqli_query($db_connection, $query);

        $i = 1;
        foreach ($pets as $data): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['doctors_name_0014']; ?></td>
            <td><?php echo $data['doctors_gender_0014']; ?></td>
            <td><?php echo $data['doctors_address_0014']; ?></td>
            <td><?php echo $data['doctors_phone_0014']; ?></td>
        </tr>
        <?php endforeach;
        ?>
    </table>
    <p><a href="index.php">BACK TO THE MENU</p>
</body>
</html>