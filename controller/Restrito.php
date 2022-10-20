<?php
session_start();
if (!isset($_SESSION['id'])){
    header("Location: \studio\index.php");
    session_destroy();
    //session_unset();
    die();
}
?>