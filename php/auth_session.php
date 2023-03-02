<?php
include_once("../php/conn.php");

// Registers

if (isset($_POST["register_button"])) {
    $username = mysqli_real_escape_string($conn, $_POST['register_username_input']);
    $email = mysqli_real_escape_string($conn, $_POST['register_email_input']);
    $telephone_user = mysqli_real_escape_string($conn, $_POST['register_tel_input']);
    $address_user = mysqli_real_escape_string($conn, $_POST['register_address_input']);
    $first_password = mysqli_real_escape_string($conn, $_POST['register_password_input']);

    $user_check_query = mysqli_query($conn, "SELECT * FROM `users` WHERE  username = '$username' OR email = '$email'") or die("query failed");

    if (mysqli_num_rows($user_check_query) > 0) {
        $message[] = "Users already exists";
    } else {

        $insert = mysqli_query($conn, "INSERT INTO `users` (username, email, telephone, address, password) VALUES ('$username','$email', '$telephone_user', '$address_user', '" . md5($first_password) . "') ") or die('query failed');

        if ($insert) {
            $message[] = "Registered sucessfully!";
            header("location: login.php");
        } else {
            $message[] = "Registered failed";
        }
    }
}
