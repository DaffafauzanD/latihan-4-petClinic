<?php
if (isset($_POST['save'])) {
    include 'connection_0014.php';

    $query = "INSERT INTO medicals_0014 SET
              pet_id_0014       = '$_POST[pet_id_0014]',
              doctor_id_0014    = '$_POST[doctors_id_0014]',
              symptom_0014      = '$_POST[symptom_0014]',
              diagnose_0014     = '$_POST[diagnose_0014]',
              treatment_0014    = '$_POST[treatment_0014]',
              cost_0014         = '$_POST[cost_0014]'";

    $create = mysqli_query($db_connection, $query);

    if ($create) {
        echo "<script> alert('medical added successfully!'); </script>";
    } else {
        echo "<script> alert('medical added failed!'); </script>";
    }
} ?>
<script>
window.location.replace("medicals_0014.php?pet_id=<?= $_POST['pet_id_0014'] ?>");
</script>