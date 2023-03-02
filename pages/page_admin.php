<?php
include_once("../php/auth_login.php");
include_once("../php/admin.php");


$admin = $_SESSION["user_nivel"];

if (isset($_SESSION["user_id"]) && $admin == 1) {
} else {
    header("location: login.php");
}

if (isset($_POST["add_news_btn"])) {
    $title_news = mysqli_real_escape_string($conn, $_POST["add_title_input"]);
    $desc_news = mysqli_real_escape_string($conn, $_POST["add_description_input"]);
    $link_news = mysqli_real_escape_string($conn, $_POST["add_link_input"]);

    $news_check = mysqli_query($conn, "SELECT * FROM `news` WHERE title = '$title_news'") or die("query failed");

    if (mysqli_num_rows($news_check) == 0) {
        $insert_data = mysqli_query($conn, "INSERT INTO `news` (title, link, description) VALUES ('$title_news', '$link_news', '$desc_news')") or die('query failed');
    }
}

if (isset($_POST["add_portfolio_btn"])) {
    $author_portfolio = mysqli_real_escape_string($conn, $_POST["add_author_portfolio"]);
    $title_portfolio = mysqli_real_escape_string($conn, $_POST["add_title_portfolio"]);
    $desc_portfolio = mysqli_real_escape_string($conn, $_POST["add_description_portfolio"]);
    $link_portfolio = mysqli_real_escape_string($conn, $_POST["add_github_link_portfolio"]);
    $technologies_portfolio = mysqli_real_escape_string($conn, $_POST["add_technologies_portfolio"]);

    $news_check_portfolio = mysqli_query($conn, "SELECT * FROM `portfolio` WHERE title_portfolio = '$title_portfolio'") or die("query failed");

    if (isset($_FILES["perfil_portfolio"]) && !empty($_FILES["perfil_portfolio"])) {
        $arquivo_portfolio = $_FILES["perfil_portfolio"]["name"];
        $arquivo_portfolio_size = $_FILES["perfil_portfolio"]["size"];
        $arquivo_portfolio_folder = "../image_upload/" . $arquivo_portfolio;

        if (move_uploaded_file($_FILES["perfil_portfolio"]["tmp_name"], $arquivo_portfolio_folder)) {
            $message[] = "Portfolio added successfully";
        }

        if (mysqli_num_rows($news_check_portfolio) == 0) {

            $insert_data = mysqli_query($conn, "INSERT INTO `portfolio` (author, title_portfolio, description_portfolio, github, technologies, image_portfolio) VALUES ('$author_portfolio', '$title_portfolio', '$desc_portfolio', '$link_portfolio', '$technologies_portfolio', '$arquivo_portfolio')") or die('query failed');
        }
    }
}


// List users

$list_users = mysqli_query($conn, "SELECT * FROM `users` ORDER BY ID DESC");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/page_admin_style.css">
    <title>Admin Page</title>
</head>

<body>
    <section class="section_admin_page">
        <h1>Welcome to the admin area</h1>

        <section class="content_news_form" id="box_news_form">

            <form action="../pages/page_admin.php" class="form_news" method="post" enctype="multipart/form-data">
                <h2>Add a new news</h2>
                <div class="content_title_news">
                    <label>Title News:</label>
                    <input name="add_title_input" required type="text">
                </div>
                <div class="content_link_news">
                    <label>Link News:</label>
                    <input name="add_link_input" required type="text">
                </div>
                <div class="content_description_news">
                    <label>Description News:</label>
                    <textarea name="add_description_input" required id="" cols="30" rows="10"></textarea>
                </div>
                <div class="content_button">
                    <button name="add_news_btn" type="submit">Add News</button>
                </div>
            </form>
        </section>

        <section class="content_news_form" id="box_portfolio_form">
            <form action="../pages/page_admin.php" class="form_news" method="post" enctype="multipart/form-data">
                <h2>Add a new Portfolio</h2>
                <div class="content_title_news">
                    <label>Title Project:</label>
                    <input name="add_title_portfolio" required type="text">
                </div>
                <div class="content_link_news">
                    <label>Author:</label>
                    <input name="add_author_portfolio" required type="text">
                </div>
                <div class="content_description_news">
                    <label>Description Project:</label>
                    <textarea name="add_description_portfolio" required id="" cols="30" rows="10"></textarea>
                </div>
                <div class="content_technologies_news">
                    <label>Description technologies used:</label>
                    <input name="add_technologies_portfolio" required>
                </div>
                <div class="content_github_news">
                    <label>Github Link</label>
                    <input name="add_github_link_portfolio" required>
                </div>
                <div class="content_image_project">
                    <label>Image Project</label>
                    <input type="file" name="perfil_portfolio" id="">
                </div>

                <div class="content_button">
                    <button name="add_portfolio_btn" type="submit">Add Portfolio</button>
                </div>

                <?php
                if (isset($message)) {
                    foreach ($message as $message)
                        echo '<p class="message_exists">' . $message . '</p>';
                }
                ?>
            </form>
        </section>
    </section>


    <section class="content_tables_form" id="box_listuser_form">
        <div class="content_table">
            <table class="table_users">
                <thead>
                    <tr>
                        <th scope="col">username</th>
                        <th scope="col">email</th>
                        <th scope="col">telephone</th>
                        <th scope="col">address</th>
                        <th scope="col">appointment date</th>
                        <th scope="col">service</th>
                        <th scope="col">...</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($users = mysqli_fetch_assoc($list_users)) {

                        echo "<tr>";
                        echo "<td>" . $users["username"] . "</td>";
                        echo "<td>" . $users["email"] . "</td>";
                        echo "<td>" . $users["telephone"] . "</td>";
                        echo "<td>" . $users["address"] . "</td>";
                        echo "<td>" . $users["appointment_date"] . "</td>";
                        echo "<td>" . $users["services"] . "</td>";
                        echo "<td> <a type='submit' class='edit_profile' href='../pages/edit_register.php?id=$users[id]'>Edit</a> </td>";
                        echo "<td> <a type='submit' class='delete_profile' href='../pages/delete.php?id=$users[id]' onClick=\"return confirm('Are you sure want to delete?')\">Delete</a>
                    </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </section>



    <script src="../scripts/content_admin.js"></script>
</body>

</html>