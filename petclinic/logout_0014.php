<?php
session_start();
session_destroy();
echo "<script>alert('logout success !');window.location.replace('form_login_0014.php');</script>";
?>