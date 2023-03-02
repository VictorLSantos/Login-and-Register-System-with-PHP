<?php
include_once("../php/auth_profile.php");
include_once("../php/auth_login.php");

if (!isset($_SESSION["user_id"])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/profile_user.css">
    <script src="https://kit.fontawesome.com/c08d9ddcc6.js" crossorigin="anonymous"></script>
    <title>Your profile</title>
</head>

<body>
    <section class="section_profile">
        <div class="card_profile_user">
            <div class="admin_button">
                <span>Admin</span>
                <a href="page_admin.php"><i class="fa-solid fa-lock"></i></a>
            </div>
            <form action="profile_user.php" method="post" class="card_profile" enctype="multipart/form-data">
                <h3 class="title_profile">Welcome to your profile</h3>
                <h2 id="username_profile_id">
                    <?php if (isset($fetch["username"])) {
                        echo $fetch["username"];
                    }
                    ?>
                </h2>
                <div class="dates_users">
                    <span id="user_data_divider">User data:</span>

                    <div class="box_email_profile">
                        <label>Your e-mail:</label>
                        <p>
                            <?php if (isset($fetch["email"])) {
                                echo $fetch["email"];
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <br>
                <hr width="100%">

                <div class="dates_customers">
                    <span id="user_customers_divider">Customer's personal data:</span>
                    <div class="box_tel_profile">
                        <label>Your telephone:</label>
                        <p>
                            <?php if (isset($fetch["telephone"])) {
                                echo $fetch["telephone"];
                            }
                            ?>
                        </p>
                    </div>

                    <div class="box_address_profile">
                        <label>Your address:</label>
                        <p>
                            <?php if (isset($fetch["address"])) {
                                echo $fetch["address"];
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <br>
                <hr width="100%">

                <div class="dates_appointment">
                    <span id="user_services_divider">Your appointments:</span>
                    <div class="box_services_profile">
                        <label>Scheduled service:</label>
                        <p>
                            <?php if (isset($fetch["services"])) {
                                echo $fetch["services"];
                            }
                            ?>
                        </p>
                    </div>

                    <div class="box_appointment_profile">
                        <label>Scheduled date:</label>
                        <p>
                            <?php if (isset($fetch["appointment_date"])) {
                                echo $fetch["appointment_date"];
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <br>
                <hr width="100%">

                <?php
                if (isset($message)) {
                    foreach ($message as $message)
                        echo '<p class="message_exists">' . $message . '</p>';
                }
                ?>
                <div class="content_button_profile">
                    <a id="update_profile" href="update_profile.php">Update Profile</a>
                    <a id="home_toprofile" href="index.php">Home</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>