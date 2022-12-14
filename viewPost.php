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
            <?php
                $dbconnect = mysqli_connect("localhost","root", "", "altshu_final_project");
                mysqli_query($dbconnect, "SET NAMES 'utf8'");
                $Id = $_GET['id'];
                $querySelectId = "SELECT * FROM news WHERE id = '$Id'";
                $SelectedNews = mysqli_query($dbconnect, $querySelectId);        
                $SelectedOne = mysqli_fetch_array($SelectedNews);
                $SelectPostAythhorId = $SelectedOne['user_id'];
                $querySelectAuthor = "SELECT * FROM users WHERE id = '$SelectPostAythhorId'";
                $SelectedAuthor = mysqli_query($dbconnect, $querySelectAuthor);
                $Author = mysqli_fetch_array($SelectedAuthor);
                $AuthorName = $Author['first_name'];

                    echo '<section class="part-of-blog-view">
                    <h2>' . $SelectedOne['title'] . '</h2>
                    <div class="picture-text-view">';
                    echo '<img  class ="little-img-view" src='.$SelectedOne['img_url'].' alt="Little image">';
                    echo '<div class="blog-description-view">
                    <p class="inika-15">' . $SelectedOne['description'] . '</p>
                    <h5 class="red-text date">'. $AuthorName .' , '. $SelectedOne['created_at'] . '</h5>';
                    echo '<div class="view-buttons">
                    <a href="/dashboard/project/AltshuProject/delete.php?id='.$SelectedOne['id'].'"><button class="pink-button" type="submit" name="delete-post">Delete post</button></a>
                    <a href="/dashboard/project/AltshuProject/editPost.php?id='.$SelectedOne['id'].'"><button class="white-button" name="edit-post">Edit post</button></a>';
                    echo '</div>
                </div></div>';
                    echo  '</section>
                    <hr>';
            ?>
    </article>        
</main>
<footer class="floor">
        <hr class="floor-hr">
        <p class="white-text">© Powered by Yuliya LOV, 2022</p>
</footer>
<script src="./assets/script.js"></script>
</body>
</html>