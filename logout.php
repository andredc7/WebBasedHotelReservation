<?php
    session_start();
    session_unset();
    session_destroy();
        echo "<script>alert('Anda telah keluar');</script>";
        echo "<script>location='login.php';</script>";
?>
