<?php
    session_start();
    header("Location: \studio\index.php");
    session_destroy();
    session_unset();
?>