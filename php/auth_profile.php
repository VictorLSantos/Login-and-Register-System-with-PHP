<?php
session_start();
include_once 'conn.php';
include_once "auth_login.php";

$users_id = $_SESSION['user_id'] ?? '0';


if (isset($_POST["submit_profile"])) {
    if (isset($users_id)) {
        header("location: ../pages/profile_user.php");
        die();
    }
}

$select_user = mysqli_query($conn, "SELECT * FROM  `users` WHERE id='$users_id'") or die("query failed");


if (mysqli_num_rows($select_user) == 1) {
    $fetch = mysqli_fetch_assoc($select_user);
} else {
    session_destroy();
}
