<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>window.location.replace('form_login_0014.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Daffa</title>
    <style>
    <?php include 'style.css';
    ?>
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="left">
            <h1>Pet Clinic Daffa</h1>
        </div>
        <div class="right">
            <input type="checbox" id="check">
            <label for="check" class="checkbin">
                <i class="fa fa-bars"></i>
            </label>
            <ul class="list">
                <li><a href="read_pet_0014.php">Data Pet </a></li>
                <li><a href="read_doctor_0014.php">Data Doctors </a></li>
                <?php if ($_SESSION['usertype'] == 'Manager') { ?>
                <li><a href="read_user_0014.php">User </a></li>
                <li><a href="report.php">Monthly report</a></li><?php } ?>
                <li><a href="change_password_0014.php">Change Password</a></li>
                <li><a href="logout_0014.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="body">
        <div class="heading">
            <h1>Welcome <?= $_SESSION[
                'fullname'
            ] ?>, you login as <?= $_SESSION['usertype'] ?></h1>
            <br>

            <div class="card-img">
                <img src="uploads/users/<?= $_SESSION[
                    'userphoto'
                ] ?>" alt="" class="img-card">
            </div>

            <p>
                For more user info click below here, thanks for the attention
            </p>
            <br>
            <br>
            <div class="container">
                <button class="share-button"><?= $_SESSION[
                    'usertype'
                ] ?> info</button>
            </div>
        </div>
    </div>
    <div class="box-modal">
        <div class="modal-content">
            <div class="modal-body">
                <h2><?= $_SESSION['usertype'] ?> access and info</h2>
                <ul><?php if ($_SESSION['usertype'] == 'Manager') { ?>
                    <li><img src="icon/verify.png" alt=""> Can see Monthly report</li>
                    <li><img src="icon/verify.png" alt=""> Can edit and remove user</li>
                    <li><img src="icon/verify.png" alt=""> All access to all link</li>
                    <?php } ?>
                    <?php if ($_SESSION['usertype'] == 'Staff') { ?>
                    <li><img src="icon/verify.png" alt=""> Only can add and edit doctor </li>
                    <li><img src="icon/verify.png" alt=""> Only can add and edit data Pet</li>
                    <li><img src="icon/not_verify.png" alt=""> Cannot see Monthly report</li>
                    <li><img src="icon/not_verify.png" alt=""> Cannot edit or remove user</li>
                    <?php } ?>
                </ul>
                <h3>Social media author</h3>
                <div class="social-media">
                    <a href="https://www.facebook.com/" target="_blank"><button>Facebook</button></a>
                    <a href="https://twitter.com/appasidap" target="_blank"><button>Twitter</button></a>
                    <a href="https://www.youtube.com/channel/UC6cqxzVx9TOQN9EWsAi6QuA"
                        target="_blank"><button>youtube</button></a>
                </div>

            </div>
        </div>
    </div>

    <script>
    const btn_share = document.querySelector('.share-button');
    const modal = document.querySelector('.modal-content');

    btn_share.addEventListener('click', () => {
        modal.classList.add('show-modal');
    })

    modal.addEventListener('click', (e) => {
        if (e.target.classList.contains('modal-content')) {
            modal.classList.remove('show-modal');
        }
    })
    </script>


</body>


</html>