<?php
include('../php/conn.php');
include("../php/feed_news.php");
include("../php/auth_profile.php");
include_once("../php/logout.php");


$exibe = "SELECT * FROM `news` ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $exibe);

$show_portfolio = "SELECT * FROM `portfolio` ORDER BY id DESC LIMIT 5";
$result_portfolio = mysqli_query($conn, $show_portfolio);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome to our Website </title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/background_animation.css">
    <link rel="stylesheet" href="../styles/portfolio.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/c08d9ddcc6.js" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">
    </script>



</head>

<body>
    <header class="navigation_header">
        <nav class="navigation-bar">
            <ul class="list-items">

                <li class="item active">
                    <a class="link" href="#">
                        <i class="fas fa-home fa-2x">
                            <br>
                            <span class="title_home">Home</span>
                        </i>
                    </a>
                </li>
                <li class="item">
                    <a class="link" href="#services_ancora">
                        <i class="fa-solid fa-newspaper">
                            <br>
                            <span class="title_home">Services</span>
                        </i>
                    </a>
                </li>
                <li class="item">
                    <a class="link" href="#">
                        <i class="fa-solid fa-diagram-project">
                            <br>
                            <span class="title_home">Portfolio</span>
                        </i>
                    </a>
                </li>
                <li class="item">
                    <a class="link" href="#">
                        <i class="fa-solid fa-phone">
                            <br>
                            <span class="title_home">Contact</span>
                        </i>
                    </a>
                </li>
                <li class="item">
                    <a class="link" href="profile_user.php" target="_blank" type="submit" name="submit_profile">
                        <i class="fas fa-user fa-2x">
                            <br>
                            <span class="title_home">
                                <?php if (isset($fetch["username"])) {
                                    echo $fetch["username"];
                                } else {

                                    echo "Profile";
                                }
                                ?>
                            </span>
                        </i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="section_first_index area">

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <article class="welcome_website">
            <h2>Hi, i'am</h2>
            <h1>Victor Lima</h1>
            <p>Make your appointment to take the first step in your project Front-end, Back-end or both.</p>
            <a class="button_general" href="login.php">Make an appointment</a>
        </article>
        <article class="news_victor_portfolio">
            <?php
            while ($row = mysqli_fetch_assoc($result)) { // Obtém os dados da linha atual e avança para o próximo registro
                $result_link = $row["link"];
                echo "<div class='blog_post'>";
                echo "<div class='container_copy'>";
                echo '<h2 class="title_area">' . $row['title'] . '</h2>';
                echo '<p class="description_news">' . $row['description'] . '</p>';
                echo "<a class='btn_news btn_primary'  href=\"" . $result_link . "\">Learn More</a>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </article>
    </section>

    <section class="section_seccond_about">
        <div class="content_about">
            <h2 class="title_about">About us</h2>
            <span class="divisor"></span>
            <p class="description_about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quas dolorum
                officia, ullam voluptas omnis
                non
                architecto iure officiis doloremque at dolore accusamus vitae numquam illum esse. Dolore, nisi expedita?
            </p>
            <a class="button_general" href="login.php">Our services</a>
        </div>
        <div class="img_about">
            <img src="../image/19362653-removebg-preview.png" alt="">
        </div>
    </section>

    <section class="section_third_ourservice" id="services_ancora">
        <div class="content_ourservice">
            <h2 class="title_ourservice">
                Our services
            </h2>
            <span class="divisor"></span>
            <div class="slider_show">
                <div class="mySlides fade">
                    <div class="content_img">
                        <img src="../image/ourservice_1.png">
                    </div>
                    <div class=" text">
                        <h3 class="ourservice_title_front_back">Frontend<br><span>Services</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae enim, odit est harum
                            ratione iusto voluptates eligendi ipsam omnis facere. Nisi commodi, velit inventore labore
                            assumenda tempora aut ad!</p>
                    </div>
                    <a type="submit" name="services_entry" class="our_services services_about"
                        href="./frontend_service.php">Make an
                        appointment</a>
                </div>

                <div class="mySlides fade">
                    <div class="content_img">
                        <img src="../image/ourservice_2.png">
                    </div>
                    <div class=" text">
                        <h3 class="ourservice_title_front_back">Backend<br> <span>Services</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae enim, odit est harum
                            ratione iusto voluptates eligendi ipsam omnis facere. Nisi commodi, velit inventore labore
                            assumenda tempora aut ad!</p>
                    </div>
                    <a type="submit" name="services_entry" class="our_services services_about"
                        href="./backend_service.php">Make an
                        appointment</a>
                </div>

                <div class="mySlides fade">
                    <div class="content_img">
                        <img src="../image/ourservice_3.png">
                    </div>
                    <div class=" text">
                        <h3 class="ourservice_title_front_back">Front and Back <br> <span>Services</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae enim, odit est harum
                            ratione iusto voluptates eligendi ipsam omnis facere. Nisi commodi, velit inventore labore
                            assumenda tempora aut ad!</p>
                    </div>
                    <a type="submit" name="services_entry" class="our_services services_about"
                        href="front_back_service.php">Make an
                        appointment</a>
                </div>


                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div class="img_ourservice">
            <img src="../image/20944117-removebg-preview.png" alt="">
        </div>

        <a class="services_about button_general" href="">contact us</a>
    </section>

    <section class="section_four_portfolio">
        <h2 class="title_portfolio">
            Our services
        </h2>
        <div class="content_portfolio">

            <!-- Test with php -->

            <?php
            while ($row_portfolio = mysqli_fetch_assoc($result_portfolio)) { // Obtém os dados da linha atual e avança para o próximo registro
                $result_link_portfolio = $row_portfolio["github"];
                echo "<div class='card'>";
                echo "<div class='header'>";
                echo '<img name ="image_portfolio" src = "../image_upload/' . $row_portfolio['image_portfolio'] . '">';

                echo "</div>";
                echo "<div class='info'>";
                echo '<h2 class="author_portfolio">' . $row_portfolio['author'] . '</h2>';
                echo '<p class="title_portfolio">' . $row_portfolio['title_portfolio'] . '</p>';
                echo '<p class="description_portfolio">' . $row_portfolio['description_portfolio'] . '</p>';
                echo "</div>";
                echo "<div class='footer'>";
                echo '<p class = "tag">' . $row_portfolio['technologies'] . '</p>';
                echo "<a class='action' href=\"" . $result_link_portfolio . "\">Github</a>";
                echo "</div>";
                echo "</div>";
            }
            ?>

        </div>
    </section>

    <script src="../scripts/slide.js"></script>
    <script src="../scripts/slide_portfolio.js"></script>


</body>

</html>