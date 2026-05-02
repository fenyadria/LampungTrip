<?php
session_start();

if (isset($_SESSION['login'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location: admin.php");
    } else {
        header("Location: user.php");
    }
} else {
    header("Location: login.php");
}
exit;
?>