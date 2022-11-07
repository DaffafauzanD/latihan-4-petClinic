<!DOCTYPE html>
<html lang="en">
<head>
    <title>pet clinic daffa</title>
</head>
<body>
    <h1>pet clinic daffa</h1>
    <h3>pets list</h3>
    <p><a href="add_pet_0014.php">add new pet</a></p>
    <table border="1">
        <tr>
            <th>no</th>
            <th>name</th>
            <th>type</th>
            <th>gender</th>
            <th>age </th>
            <th>owner</th>
            <th>address</th>
            <th>phone</th>
            <th colspan="2">action</th>
        </tr>
        <?php
        include 'connection_0014.php';
        $query = 'SELECT * FROM pets_0014';
        $pets = mysqli_query($db_connection, $query);

        $i = 1;
        foreach ($pets as $data): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['pet_name_0014']; ?></td>
            <td><?php echo $data['pet_type_0014']; ?></td>
            <td><?php echo $data['pet_gender_0014']; ?></td>
            <td><?php echo $data['pet_age_0014']; ?></td>
            <td><?php echo $data['pet_owner_0014']; ?></td>
            <td><?php echo $data['pet_address_0014']; ?></td>
            <td><?php echo $data['pet_phone_0014']; ?></td>
            <td><a href="edit_pet_0014.php?id=<?= $data[
                'pet_id_0014'
            ] ?>">Edit pet</a></td>
            <td><a href="delete_pet_0014.php?id=<?= $data[
                'pet_id_0014'
            ] ?>"onclick="return confirm('are you sure?')">delete pet</a></td>
        </tr>
        <?php endforeach;
        ?>
    </table>
    <p><a href="index.php">BACK TO THE MENU</p>
</body>
</html>