<!DOCTYPE html>
<html lang="en">
<head>
   <title>Pet Clinic Daffa</title>
</head>
<body>
    <h1>Daffa Pet Clinic</h1>
    <h3>Form add Pet</h3>
    <form method="post" action="create_pet_0014.php">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text" name="pet_name_0014" require></td>
            </tr>
            <tr>
                <td>type</td>
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
                <td>gender</td>
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
</body>
</html>