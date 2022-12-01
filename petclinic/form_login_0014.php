<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Pet Clinic Daffa</title>
    <style>
    <?php include 'style_login.css';
    ?>
    </style>
</head>

<body>
    <div class="navbar">
        <h1>PET CLINIC DAFFA</h1>
        <hr>
    </div>
    <div class="container">
        <div class="kotak_login">
            <h3>Login</h3>
            <br>
            <form method="post" action="login_0014.php">
                <label>Username</label>
                <input type="text" name="username_0014" class="form_login" required>
                <label>Password</label>
                <input type="password" name="password_0014" class="form_login" id="pass" required>
                <label>
                    <input type="checkbox" onclick="show()">
                    Show password
                </label>
                <div class="kotak_submit">
                    <input type="submit" name="login" class="tombol_login" value="LOGIN">
                    <input type="reset" name="reset" class="tombol_reset" value="RESET">
                </div>
                <a href="index.php">CANCEL</a>
        </div>
    </div>


    </form>
    <script>
    function show() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>

</html>