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
            <h1>Form add Pet</h1>
        </div>
    </div>
    <div class="container">
        <form method="post" action="create_pet_0014.php">
            <div class="inputD">
                <table>
                    <tr>
                        <label>name</label>
                        <td><input type="text" name="pet_name_0014" require></td>
                    </tr>
            </div>
            <tr>
                <label>type</label>
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
                <label for="anjay">gender</label>
                <td>
                    <input type="radio" name="pet_gender_0014" value="male" require> male
                    <input type="radio" name="pet_gender_0014" value="female" require> female
                </td>
            </tr>
            <tr>
                <td>age</td>
                <td><input type="number" name="pet_age_0014" require></td>
            </tr>
            <tr>
                <td>owner</td>
                <td><input type="text" name="pet_owner_0014" require></td>
            </tr>
            <tr>
                <td>address</td>
                <td><textarea name="pet_address_0014"></textarea>
                </td>
            </tr>
            <tr>
                <td>phone</td>
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
</body>

</html>