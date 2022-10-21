<?php
    session_start();
    header("Location: \studio\login.php");
    session_destroy();
    session_unset();
?>