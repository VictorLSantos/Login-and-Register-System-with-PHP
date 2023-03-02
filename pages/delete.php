<?php
include_once("../php/conn.php");
include_once "../php/auth_session.php";

$id =  $_GET["id"];


$result_delete = mysqli_query($conn, "DELETE from `users` WHERE id='$id'");


if (mysqli_num_rows($result_delete) == 0) {
    session_destroy();
    header("location: index.php");
} elseif (mysqli_num_rows($result_delete) >= 1) {
    header("location: page_admin.php");
} else {
    echo "failed";
}
