<?php
include_once("../php/auth_login.php");
include_once("../php/auth_session.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <script src="https://kit.fontawesome.com/c08d9ddcc6.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <section class="class_section_login" id="id_section_login">
        <div class="box_main">
            <div class="box_welcome">
                <h1>Wellcome</h1>
                <h2>to our website</h2>
                <p>Check out our services!</p>

                <a href="index.php" id="button_our_services">Our services</a>
            </div>
            <div class="box_login">
                <form action="login.php" method="post" id="form_login" enctype="multipart/form-data">
                    <h2 id="title_login">Login</h2>

                    <div class="box_email">
                        <i class="fa-sharp fa-solid fa-envelope"></i>
                        <input type="email" name="login_email_input" id="input_email_login" placeholder="Email" required />
                    </div>
                    <div class="box_password">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="login_password_input" id="input_password_login" placeholder="Password" required />
                    </div>

                    <?php
                    if (isset($message)) {
                        foreach ($message as $message)
                            echo '<p class="message_exists">' . $message . '</p>';
                    }
                    ?>
                    <div class="button_login">
                        <button type="submit" id="login_button" name="login_user">Login</button>
                        <p class="already_account">You already have an account?<a href="register.php" id="register_button">Register</a>
                    </div>

                </form>

            </div>
        </div>
    </section>
</body>

</html>