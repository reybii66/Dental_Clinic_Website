<?php
// Handling logout
session_start();
if ($_SESSION['name']) {
    // unset($_SESSION['user_id']);
    unset($_SESSION['name']);
    // setcookie("PQIx5JKXI", $db_uid, time() - 3600);
    setcookie("68iXvUSHe", $db_uname, time() - 3600);
    header('Location:adminlogin.php');
}
?>