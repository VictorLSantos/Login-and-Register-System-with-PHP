<?php
include_once "conn.php";
include_once "../php/auth_session.php";


if (isset($_POST["login_user"])) {
    $email_login = mysqli_real_escape_string($conn, $_POST['login_email_input']);
    $first_password_login = mysqli_real_escape_string($conn, $_POST['login_password_input']);

    $user_check_query =  "SELECT * FROM `users` WHERE  email = '$email_login'";
    $result = mysqli_query($conn, $user_check_query);
    $user_login = mysqli_num_rows($result);
    if ($user_login == 1) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_nivel"] = $row["nivel"];
        header("location: index.php");
    } elseif ($user_login == 0) {
        session_destroy();
        die();
        header("location: register.php");
    } else {
        $message[] = "Incorrect username/password";
    }
}
