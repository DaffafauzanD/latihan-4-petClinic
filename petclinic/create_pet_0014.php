<?php
//echo $_POST['pet_name_0014'] . '<br>';
//echo $_POST['pet_type_0014'] . '<br>';
//echo $_POST['pet_gender_0014'] . '<br>';
//echo $_POST['pet_age_0014'] . '<br>';
//echo $_POST['pet_owner_0014'] . '<br>';
//echo $_POST['pet_address_0014'] . '<br>';
//echo $_POST['pet_phone_0014'] . '<br>';

if (isset($_POST['save'])) {
    include 'connection_0014.php';
    $nama = $_POST['pet_name_0014'];
    $type = $_POST['pet_type_0014'];
    $gender = $_POST['pet_gender_0014'];
    $age = $_POST['pet_age_0014'];
    $owner = $_POST['pet_owner_0014'];
    $address = $_POST['pet_address_0014'];
    $phone = $_POST['pet_phone_0014'];

    $query = "INSERT INTO pets_0014 SET pet_name_0014='$nama', pet_type_0014='$type', pet_gender_0014='$gender', pet_age_0014='$age', pet_owner_0014='$owner', pet_address_0014='$address', pet_phone_0014='$phone'";

    $create = mysqli_query($db_connection, $query);

    if ($create) {
        echo '<p>pet added successfully ! </p>';
    } else {
        echo '<p>pet add failed ! </p>';
    }
} ?>
<p><a href="read_pet_0014.php">BACK TO PETS LIST</a></p>    