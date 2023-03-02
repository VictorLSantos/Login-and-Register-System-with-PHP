<?php
include("../php/conn.php");

$id = $_GET["id"];

if (isset($_POST["update_button"])) {
    $edit_username = mysqli_real_escape_string($conn, $_POST["edit_username"]);
    $edit_email = mysqli_real_escape_string($conn, $_POST["edit_email"]);
    $edit_telephone = mysqli_real_escape_string($conn, $_POST["edit_telephone"]);
    $edit_address = mysqli_real_escape_string($conn, $_POST["edit_address"]);

    mysqli_query($conn, "UPDATE `users` SET username = '$edit_username', email = '$edit_email', telephone = '$edit_telephone', address = '$edit_address' WHERE id = '$id'") or die("query failed");
    header("location: page_admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../styles/register_style.css" />
    <script src="https://kit.fontawesome.com/c08d9ddcc6.js" crossorigin="anonymous"></script>
    <title>Edit Register</title>
</head>

<body>
    <section class="class_section_register" id="id_section_register">
        <div class="box_main">

            <div class="box_register">
                <!--  -->
                <form action="" method="post" id="form_register" name="form">
                    <?php

                    if (isset($id)) {
                        $id = $_GET["id"];

                        $users = "SELECT * FROM `users` WHERE id = '$id' " or die("query failed");

                        $result_edit_profile = mysqli_query($conn, $users);

                        if (mysqli_num_rows($result_edit_profile) > 0) {
                            foreach ($result_edit_profile as $users) {
                                $username_edit = $users["username"];
                                $email_edit = $users["email"];
                                $telephone_edit = $users["telephone"];
                                $address_edit = $users["address"];
                            }
                        }
                    }
                    ?>

                    <h2 id="title_register">User Update</h2>
                    <!--  -->
                    <div class="box_name">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="input_name_register" name="edit_username" value="<?php
                                                                                                echo $username_edit;
                                                                                                ?>">
                    </div>
                    <!--  -->
                    <div class="box_email">
                        <i class="fa-sharp fa-solid fa-envelope"></i>
                        <input type="email" id="input_email_register" name="edit_email" value="<?php
                                                                                                echo $email_edit;
                                                                                                ?>">
                    </div>
                    <!--  -->
                    <div class="box_telephone">
                        <i class="fa-sharp fa-solid fa-phone"></i>
                        <input type="tel" id="input_telephone_register" name="edit_telephone" value="<?php
                                                                                                        echo $telephone_edit;
                                                                                                        ?>">
                    </div>
                    <!--  -->
                    <div class="box_address">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="tel" id="input_address_register" name="edit_address" value="<?php
                                                                                                    echo $address_edit;
                                                                                                    ?>">
                    </div>

                    <div class="button_register">
                        <button type="submit" name="update_button" id="register_button">Update</button>

                    </div>
                </form>
                <!--  -->
            </div>
        </div>
    </section>
</body>

</html>