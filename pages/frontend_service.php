<?php
session_start();
include_once("../php/customers_services.php");

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
    <link rel="stylesheet" href="../styles/services.css">
    <script src="https://kit.fontawesome.com/c08d9ddcc6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>
    <title>Frontend Services</title>
</head>

<body>
    <section class="frontend_service_seller services_seller">
        <div class="content_frontend_service content_services">
            <div class="info_frontend_service info_services">
                <div class="btn_back"><a href="index.php"><i class="fa-solid fa-arrow-left"></i></a></div>
                <h3>KNOW MORE ABOUT OUR </h3>
                <h2>FRONTEND SERVICES!</h2>
                <div class="content_frontend_img content_img_services">
                    <img src="../image/pngwing.com.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, voluptatem eius ex aspernatur,
                    aliquid voluptate provident aliquam sunt officiis atque dolor, quia quam! In voluptatibus iste
                    perspiciatis. Eum, distinctio ex.</p>
            </div>
            <div class="form_frontend_service form_services_content">
                <h2>Make your appointment</h2>
                <form action="frontend_service.php" method="post" id="form_services" class="form_frontend_service form_services" enctype="multipart/form-data">
                    <input type="date" name="date_input_services" required id="date_input">
                    <br>
                    <select name="input_services" id="services_input">
                        <option value="Frontend Services">Frontend Services</option>
                    </select>
                    <br>
                    <?php
                    if (isset($message)) {
                        foreach ($message as $message)
                            echo '<p class="message_exists">' . $message . '</p>';
                    }
                    ?>
                    <div class="content_button_schedule">

                        <button onclick="ClickDoBotao()" name="schedule" id="schedule" class="schedule" type="submit">To
                            schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="../scripts/format_date.js"></script>
</body>

</html>