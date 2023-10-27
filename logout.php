<?php
session_start();
unset($_SESSION['MEMBER']);
if (isset($_COOKIE['remember'])) {
    setcookie('remember', '', time() - 3600);
}

header('location:index.php');
