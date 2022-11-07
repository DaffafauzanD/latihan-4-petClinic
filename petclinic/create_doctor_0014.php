<?php
// echo $_POST['doctors_name_0014'] . "<br>";
// echo $_POST['doctors_gender_0014'] . "<br>";
// echo $_POST['doctors_address_0014'] . "<br>";
// echo $_POST['doctors_phone_0014'] . "<br>";

if (isset($_POST['save'])) {
    // check variable POST from FORM
    include 'connection_0014.php'; // call connection php mysql

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO doctors_0014 (doctors_name_0014, doctors_gender_0014, doctors_address_0014, doctors_phone_0014) 
        VALUES ('$_POST[doctors_name_0014]', '$_POST[doctors_gender_0014]', '$_POST[doctors_address_0014]', '$_POST[doctors_phone_0014]')";
}
// run query
$create = mysqli_query($db_connection, $query);

if ($create) {
    // check if query TREU/success
    //echo "<p>Pet added succesfully</p>"; //success msg (html)
    echo "<script> alert('doctors added succesfully !'); </script>"; //success msg (javascript)
} else {
    //echo "<p>Pet add failed</p>"; //success msg (html)
    echo "<script> alert('doctors add failed !'); </script>"; //success msg (javascript)
}
?>

<!-- <p><a href="read_pet_0014.php">BACK TO PET LIST</a></p> -->
<script>window.location.replace("read_doctor_0014.php");</script>