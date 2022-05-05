<?php
session_start();

if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['name']);
}
header("location: index.php");

?>