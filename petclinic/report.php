<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert ('Please login first !');window.location.replace('form_login_0014.php');</script>";
}
if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert ('Access Forbiden !');window.location.replace('index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pet clinic daffa</h1>
    <h3>Monthly report</h3>
    <?php
    $months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];
    $year = date('Y');
    ?>
    <form>
        <p>Select
            <select name="month" required>
                <option value="">Month</option>
                <?php for ($m = 1; $m <= 12; $m++) { ?>
                <option value="<?= $m ?>"><?= $months[$m - 1] ?></option>
                <?php } ?>
            </select>
            <select name="year" required>
                <option value="">Year</option>
                <?php for ($y = 0; $y <= 2; $y++) { ?>
                <option value="<?= $year - $y ?>"><?= $year - $y ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="View report">
        </p>
    </form>
    <?php if (isset($_GET['year'])) {

        include 'connection_0014.php';
        //$query = 'SELECT * FROM medicals_0014';
        $query = "SELECT m.mr_date_0014, d.doctors_name_0014, p.pet_name_0014, p.pet_owner_0014, m.cost_0014 FROM medicals_0014 AS m, doctors_0014 AS d, pets_0014 AS p
        WHERE m.doctor_id_0014=d.doctors_id_0014 AND m.pet_id_0014=p.pet_id_0014 AND MONTH(m.mr_date_0014)='$_GET[month]' AND YEAR(m.mr_date_0014)='$_GET[year]'";
        $report = mysqli_query($db_connection, $query);
        ?>
    <h4>Report Periode
        <?= $months[$_GET['month'] - 1] ?>
        -
        <?= $_GET['year'] ?>
    </h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>date</th>
            <th>doctor</th>
            <th>pet</th>
            <th>Owner</th>
            <th>pay ($)</th>
        </tr>
        <?php if (mysqli_num_rows($report) > 0) {

            $i = 0;
            $total = 0;
            foreach ($report as $data):
                $total = $total + $data['cost_0014']; ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $data['mr_date_0014'] ?></td>
            <td><?= $data['doctors_name_0014'] ?></td>
            <td><?= $data['pet_name_0014'] ?></td>
            <td><?= $data['pet_owner_0014'] ?></td>
            <td align="right"><?= $data['cost_0014'] ?></td>
        </tr>
        <?php
            endforeach;
            ?>
        <tr>
            <th colspan="7" align="right">Total : $<?= $total ?></th>
        </tr>
        <?php
        } else {
             ?>
        <tr>
            <th colspan="7" align="center">No records !</th>
        </tr>
        <?php
        } ?>
    </table>
    <?php
    } ?>
    <p><a href="index.php">back to menu</a></p>
</body>

</html>