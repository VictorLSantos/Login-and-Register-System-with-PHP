<?php
include_once("../php/conn.php");

$users_id = $_SESSION["user_id"];

if (isset($_POST["schedule"])) {
    $services = mysqli_real_escape_string($conn, $_POST['input_services']);
    $date_time = mysqli_real_escape_string($conn, $_POST['date_input_services']);

    mysqli_query($conn, "UPDATE `users` SET services = '$services', appointment_date ='$date_time'  WHERE id = '$users_id'") or die('query failed');
}
