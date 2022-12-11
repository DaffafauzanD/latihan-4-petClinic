<?php
if (isset($_POST['upload'])) {
    include 'connection_0014.php';

    $folder = 'uploads/pets/';
    if (
        move_uploaded_file(
            $_FILES['new_photo_0014']['tmp_name'],
            $folder . $_FILES['new_photo_0014']['name']
        )
    ) {
        $photo = $_FILES['new_photo_0014']['name'];
        $query = "UPDATE pets_0014 SET pet_photo_0014='$photo' WHERE pet_id_0014='$_POST[pet_id_0014]'";
        $upload = mysqli_query($db_connection, $query);

        if ($upload) {
            if ($_POST['pet_photo_0014'] !== 'default.png') {
                unlink($folder . $_POST['pet_photo_0014']);
                echo "<script>alert('change photo successed !');window.location.replace('read_pet_0014.php');</script>";
            }
        } else {
            echo "<script>alert('change photo successed !);window.location.replace('pet_photo_0014.php?id=$_POST[pet_id_0014]');</script>";
        }
    } else {
        echo "<script>alert('change photo successed !);window.location.replace('pet_photo_0014.php?id=$_POST[pet_id_0014]');</script>";
    }
}

?>