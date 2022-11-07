<?php

if (isset($_POST['save'])) {
    include 'connection_0014.php';

    $query = "UPDATE pets_0014 SET
              pet_name_0014 = '$_POST[pet_name_0014]',
              pet_type_0014 = '$_POST[pet_type_0014]',
              pet_gender_0014 = '$_POST[pet_gender_0014]',
              pet_age_0014 = '$_POST[pet_age_0014]',
              pet_owner_0014 = '$_POST[pet_owner_0014]',
              pet_address_0014 = '$_POST[pet_address_0014]',
              pet_phone_0014 = '$_POST[pet_phone_0014]'
              WHERE pet_id_0014 = '$_POST[pet_id_0014]';
              ";

    $update = mysqli_query($db_connection, $query);

    if ($update) {
        echo '<p>pet update successfully ! </p>';
    } else {
        echo '<p>pet update failed ! </p>';
    }
} ?>
<p><a href="read_pet_0014.php">BACK TO PETS LIST</a></p>    