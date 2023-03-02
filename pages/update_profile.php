<?php
include_once("../php/conn.php");
include_once("../php/auth_profile.php");
include_once("../php/auth_login.php");

$update_id = $_SESSION["user_id"];

if (isset($_POST["update_profile_name"])) {
    $update_email = mysqli_real_escape_string($conn, $_POST["email_update"]);
    $update_telephone = mysqli_real_escape_string($conn, $_POST["telephone_update"]);
    $update_address = mysqli_real_escape_string($conn, $_POST["address_update"]);
    $update_appointments_date = mysqli_real_escape_string($conn, $_POST["appointments_update"]);

    $query_consult = mysqli_query($conn, "SELECT * FROM `users` where id = '$update_id'");

    $new_password = mysqli_real_escape_string($conn, md5($_POST["password_update"]));




    if (mysqli_num_rows($query_consult) >= 1) {
        if (isset($update_appointments_date)) {
            $data_cons = $update_appointments_date;

            $appointments = "$data_cons";

            $current_date = time();

            $query_date = strtotime("$appointments");


            $difference = $current_date - $query_date;

            $days_difference = abs(floor($difference / (60 * 60 * 24)));



            if ($days_difference < 3) {

                $message[] = "Need 3 days or more for a new appointment";
            } else {
                mysqli_query($conn, "UPDATE `users` SET email = '$update_email', telephone = '$update_telephone', email = '$update_email', address = '$update_address', appointment_date = '$update_appointments_date' WHERE id = '$update_id'") or die("query failed");
                $message[] = "Edit done successfully";
            }
        }
    }


    // if (isset($data_cons)) {
    //     $data_cons = $consulta_data['appointments_update'];


    //     $marcacao = "$data_cons";

    //     $data_atual = time();
    //     // echo $data_atual;


    //     $data_consulta = strtotime("$marcacao");
    //     echo $data_consulta;



    //     $diferenca = $data_atual - $data_consulta;


    //     $diferenca_dias = abs(floor($diferenca / (60 * 60 * 24)));



    //     if ($diferenca_dias < 3) {
    //     }
    //     echo $marcacao;
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/update_profile.css">
    <title>Edit your profile</title>
</head>

<body>
    <section class="section_update">

        <div class="card_update_user">

            <form action="update_profile.php" method="post" class="card_update_form" enctype="multipart/form-data">
                <h2 class="title_update">Update profile</h2>
                <div class="dates_users">

                    <span id="user_data_divider">User data:</span>

                    <div class="box_email_update">
                        <label>Edit your e-mail:</label>
                        <input type="email" name="email_update" id="email_update" value="<?php
                                                                                            echo $fetch["email"];
                                                                                            ?>
                    ">
                    </div>
                    <div class="box_password_update">
                        <label>Edit your password:</label>
                        <input type="password" name="password_update" id="password_update" placeholder="New password">
                    </div>
                </div>

                <br>
                <hr width="100%">

                <div class="dates_customers">

                    <span id="user_customers_divider">Customer's personal data:</span>

                    <div class="box_tel_update">
                        <label>Edit your telephone:</label>
                        <input type="tel" name="telephone_update" id="tel_update" value="<?php
                                                                                            echo $fetch["telephone"];
                                                                                            ?>">
                    </div>


                    <div class="box_address_update">
                        <label>Edit your address:</label>
                        <input type="text" name="address_update" id="address_update" value="<?php
                                                                                            echo $fetch["address"];
                                                                                            ?>">
                    </div>
                </div>

                <br>
                <hr width="100%">

                <div class="dates_appointment">

                    <span id="user_services_divider">Your appointments:</span>

                    <div class="box_services_update">
                        <label>Scheduled service:</label>
                        <p>
                            <?php if (isset($fetch["services"])) {
                                echo $fetch["services"];
                            }
                            ?>
                        </p>
                    </div>

                    <div class="box_appointments_update">
                        <label>Edit your Data:</label>
                        <input type="date" name="appointments_update" id="date_input" value="<?php
                                                                                                echo $fetch["appointment_date"];
                                                                                                ?>">

                    </div>
                </div>

                <br>
                <hr width=" 100%">

                <?php
                if (isset($message)) {
                    foreach ($message as $message)
                        echo '<p class="message_exists">' . $message . '</p>';
                }
                ?>

                <div class="content_button_update">
                    <input type="submit" id="home_toprofile" value="Save profile" name="update_profile_name">
                    <a id="update_profile" href="profile_user.php">Profile</a>
                </div>
            </form>
        </div>

    </section>

    <script src="../scripts/format_date.js"></script>
</body>

</html>