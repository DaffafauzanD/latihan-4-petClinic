<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert ('Please login first !');window.location.replace('form_login_0014.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pet Clinic Daffa</title>
    <style>
    <?php include 'style_add.css';
    ?>
    </style>
</head>

<body>
    <div class="navbar">
        <div>
            <h1>Pet Clinic Daffa</h1>
        </div>

        <div>
            <img src="nhhs.png" alt="" id="imageH">
        </div>
    </div>
    <div class="container">
        <div class="inputD">
            <form method="post" action="create_pet_0014.php">
                <table>
                    <tr>
                        <td>
                            <h1>Form Add Pet</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="pet_name_0014" require></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>
                            <select name="pet_type_0014" require>
                                <option value="">choose</option>
                                <option value="cat">cat</option>
                                <option value="dog">dog</option>
                                <option value="reptil">reptil</option>
                                <option value="bird">bird</option>
                                <option value="rondent">rodent</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="pet_gender_0014" value="male" require> Male
                            <input type="radio" name="pet_gender_0014" value="female" require> Female
                        </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><input type="number" name="pet_age_0014" require></td>
                    </tr>
                    <tr>
                        <td>Owner</td>
                        <td><input type="text" name="pet_owner_0014" require></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea name="pet_address_0014"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="pet_phone_0014" require></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="save" value="save" require>
                            <input type="reset" name="reset" value="reset" require>
                        </td>
                    </tr>

                </table>
                <p><a href="read_pet_0014.php">CANCEL</a></p>
            </form>
        </div>
    </div>
</body>

</html>