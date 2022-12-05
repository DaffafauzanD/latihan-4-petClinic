<!DOCTYPE html>
<html lang="en">

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
            <h1>Pet list</h1>
        </div>
    </div>
    <div class="body">
        <div class="text">
            <ul>
                <li>
                    <a href="add_pet_0014.php">ADD NEW PET</a>
                </li>
                <li>
                    <a href="index.php">BACK TO THE MENU</a>
                </li>
            </ul>
        </div>
        <div class="border">
            <table border="1" class="customers">
                <tr>
                    <th>no</th>
                    <th>name</th>
                    <th>type</th>
                    <th>gender</th>
                    <th>age </th>
                    <th>photo</th>
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
                    <td><a href="medicals_0014.php?pet_id=<?= $data[
                        'pet_id_0014'
                    ] ?>"><?= $data['pet_name_0014'] ?></a></td>
                    <td><?php echo $data['pet_type_0014']; ?></td>
                    <td><?php echo $data['pet_gender_0014']; ?></td>
                    <td><?php echo $data['pet_age_0014']; ?></td>
                    <td align="center">
                        <img src="uploads/pets/<?php echo $data[
                            'pet_photo_0014'
                        ]; ?>" class="icon_image" alt="">
                        <a href="pet_photo_0014.php?id=<?= $data[
                            'pet_id_0014'
                        ] ?>">change photo</a>
                    </td>
                    <td><?php echo $data['pet_owner_0014']; ?></td>
                    <td><?php echo $data['pet_address_0014']; ?></td>
                    <td><?php echo $data['pet_phone_0014']; ?></td>
                    <td><a href="edit_pet_0014.php?id=<?= $data[
                        'pet_id_0014'
                    ] ?>">Edit pet</a></td>
                    <td><a href="delete_pet_0014.php?id=<?= $data[
                        'pet_id_0014'
                    ] ?>" onclick="return confirm('are you sure?')">delete pet</a></td>
                </tr>
                <?php endforeach;
                ?>
            </table>
        </div>
    </div>

</body>

</html>