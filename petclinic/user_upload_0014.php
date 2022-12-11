<?php
if (isset($_POST['upload'])) {
    include 'connection_0014.php';

    $folder = 'uploads/users/';
    if (
        move_uploaded_file(
            $_FILES['new_user_photo_0014']['tmp_name'],
            $folder . $_FILES['new_user_photo_0014']['name']
        )
    ) {
        $photo = $_FILES['new_user_photo_0014']['name'];
        $query = "UPDATE users_0014 SET user_photo_0014='$photo' WHERE userid_0014='$_POST[userid_0014]'";
        $upload = mysqli_query($db_connection, $query);

        if ($upload) {
            if ($_POST['user_photo_0014'] !== 'default.png') {
                unlink($folder . $_POST['user_photo_0014']);
                echo "<script>alert('change photo successed !');window.location.replace('read_user_0014.php');</script>";
            }
        } else {
            echo "<script>alert('change photo successed !);window.location.replace('user_photo_0014.php?id=$_POST[userid_0014]');</script>";
        }
    } else {
        echo "<script>alert('change photo successed !);window.location.replace('user_photo_0014.php?id=$_POST[userid_0014]');</script>";
    }
}

?>