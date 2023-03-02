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
    <title>Backend Services</title>
</head>

<body>
    <section class="backend_service_seller services_seller">
        <div class="content_backend_service content_services">
            <div class="info_backend_service info_services">
                <div class="btn_back"><a href="index.php"><i class="fa-solid fa-arrow-left"></i></a></div>
                <h3>KNOW MORE ABOUT OUR </h3>
                <h2>BACKEND SERVICES!</h2>
                <div class="content_backend_img content_img_services">
                    <img src="../image/pngwing.com.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, voluptatem eius ex aspernatur,
                    aliquid voluptate provident aliquam sunt officiis atque dolor, quia quam! In voluptatibus iste
                    perspiciatis. Eum, distinctio ex.</p>
            </div>
            <div class="form_backend_service form_services_content">
                <h2>Make your appointment</h2>
                <form action="backend_service.php" method="post" class="form_backend_service form_services" enctype="multipart/form-data">
                    <input type="date" name="date_input_services" id="date_input">
                    <br>
                    <select name="input_services" id="services_input">
                        <option value="Backend Services">Backend Services</option>
                    </select>
                    <br>
                    <div class="content_button_schedule">
                        <button name="schedule" class="schedule" type="submit">To schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="../scripts/format_date.js"></script>
</body>

</html>