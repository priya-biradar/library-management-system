<?php
session_start();
unset($_SESSION['sess_user']);
session_destroy();
echo "<script>alert(' you are logged out');document.location='index.php'</script>";
    ?>