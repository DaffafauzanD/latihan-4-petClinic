<?php

if (isset($_POST['save'])) {
    include 'connection_0014.php';

    $query = "UPDATE doctors_0014 SET
              doctors_name_0014 = '$_POST[doctors_name_0014]',
              doctors_gender_0014 = '$_POST[doctors_gender_0014]',
              doctors_address_0014 = '$_POST[doctors_address_0014]',
              doctors_phone_0014 = '$_POST[doctors_phone_0014]'
              WHERE doctors_id_0014 = '$_POST[doctors_id_0014]';
              ";

    $update = mysqli_query($db_connection, $query);

    if ($update) {
        echo '<p>doctors update successfully ! </p>';
    } else {
        echo '<p>doctors update failed ! </p>';
    }
} ?>
<p><a href="read_doctor_0014.php">BACK TO PETS LIST</a></p>    