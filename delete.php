<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>My project &#128161;</title>
</head>

<body class="main-delete">
    <header>
        <img src="./assets/Images/Blog.png" alt="square">
        <div class="top-menu">
        <ul> 
            <li onClick="document.location ='index.php#about'"><a href="#about">About</a></li>
            <li onClick="document.location ='index.php#education'"><a href="#education">My education</a></li>
            <li onClick="document.location ='index.php#blog'"><a href="#blog">Blog</a></li>
            <li onClick="document.location ='index.php#contacts'"><a href="#contacts">Contacts</a></li>
        </ul>
        <img class="hamburger" src="./assets/Images/hamburger.png" alt="hamburger">
        </div>
    </header>
    <main>
    <article class="blog">
            <div class="anchor" id="blog"></div>
            <div class="title-of-article">
                <img class="wave" src="./assets/Images/red_wave.png" alt="red wave">
                <h2 class="red-text h2-title-of-article">Post of blog</h2>
            </div>
            <div class="blog-deleted">
    <?php
    $Id = $_GET['id'];
    $dbconnect = mysqli_connect("localhost","root", "", "altshu_final_project");
    mysqli_query($dbconnect, "SET NAMES 'utf8'");   
    $queryDeleteId = "DELETE FROM news  WHERE id = $Id ";
    $DeletedNews = mysqli_query($dbconnect, $queryDeleteId);
    echo '<h2>The selected post has been deleted!</h2>';
    echo '<a href="/dashboard/project/AltshuProject/index.php#blog"><button class="pink-button">Back to blog &rarr;</button></a>';
    ?>
    </div>
</article>
</main>
<footer class="floor">
        <hr>
        <p class="white-text">© Powered by Yuliya LOV, 2022</p>
    </footer>
</body>
        
