<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>pet clinic daffa</title>
    <style>
    <?php include 'style_read.css';
    ?>
    </style>
</head>

<body>
    <div class="navbar">
        <div>
            <h1>Pet Clinic Daffa</h1>
        </div>
        <div>
            <h1>Doctors list</h1>
        </div>
    </div>
    <div class="background-body">
        <div class="text">
            <ul>
                <li><a href="add_doctor_0014.php">ADD NEW DOCTOR</a></li>
                <li><a href="index.php">BACK TO THE MENU</a></li>
            </ul>
        </div>
        <div class="border">
            <table border="1" class="customers">
                <tr>
                    <th>no</th>
                    <th>name</th>

                    <th>gender</th>
                    <th>address</th>
                    <th>phone</th>
                    <th colspan="2">action</th>
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
                    <td><a href="edit_doctors_0014.php?id=<?= $data[
                        'doctors_id_0014'
                    ] ?>">Edit doctor</a></td>
                    <td><a href="delete_doctors_0014.php?id=<?= $data[
                        'doctors_id_0014'
                    ] ?>" onclick="return confirm('are you sure ?')">Delete doctor</a></td>
                </tr>
                <?php endforeach;
                ?>
            </table>
        </div>
    </div>
</body>

</html>