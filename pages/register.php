<?php include_once("../php/auth_session.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../styles/register_style.css" />
    <script src="https://kit.fontawesome.com/c08d9ddcc6.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>

<body>
    <section class="class_section_register" id="id_section_register">
        <div class="box_main">
            <div class="box_welcome">
                <h1>Wellcome</h1>
                <h2>to our website</h2>
                <p>Check out our services!</p>

                <a href="" id="button_our_services">Our services</a>
            </div>
            <div class="box_register">
                <!--  -->
                <form action="register.php" method="post" id="form_register" enctype="multipart/form-data">
                    <h2 id="title_register">Register</h2>
                    <!--  -->
                    <div class="box_name">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="input_name_register" name="register_username_input" placeholder="Username" required />
                    </div>
                    <!--  -->
                    <div class="box_email">
                        <i class="fa-sharp fa-solid fa-envelope"></i>
                        <input type="email" id="input_email_register" name="register_email_input" placeholder="Email" required />
                    </div>
                    <!--  -->
                    <div class="box_telephone">
                        <i class="fa-sharp fa-solid fa-phone"></i>
                        <input type="tel" id="input_telephone_register" name="register_tel_input" placeholder="Telephone" required />
                    </div>
                    <!--  -->
                    <div class="box_address">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="tel" id="input_address_register" name="register_address_input" placeholder="Address" required />
                    </div>
                    <!--  -->
                    <div class="box_password">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" id="input_password_register" name="register_password_input" placeholder="Password" required />
                    </div>
                    <!--  -->
                    <?php
                    if (isset($message)) {
                        foreach ($message as $message)
                            echo '<p class="message_exists">' . $message . '</p>';
                    }
                    ?>
                    <!--  -->
                    <div class="button_register">
                        <button type="submit" name="register_button" id="register_button">Register</button>
                        <p class="already_account">You already have an account?<a href="login.php" id="login_button">Login</a>
                        </p>
                    </div>
                </form>
                <!--  -->
            </div>
        </div>
    </section>
</body>

</html>