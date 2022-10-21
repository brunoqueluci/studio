<?php
session_start();
if (!isset($_SESSION['id'])){
    header("Location: \studio\login.php");
    session_destroy();
    die();
}
?>