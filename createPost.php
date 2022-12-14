<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>My project &#128161;</title>
</head>

<body>
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
                <h2 class="red-text h2-title-of-article"></h2>
            </div>
            <h3>Create your own post!</h3>
            <form class="creating-form" metod="GET">
                <div>
                <textarea name="title" type="text" rows=1 cols=51 placeholder=" write the post title here" required></textarea>
                <textarea name="description" type="text" rows=3 placeholder="write the post description here" required></textarea>
                <textarea name="img_url" type="text"  rows=1 cols=51 placeholder="paste the image url here" required></textarea>  
                <textarea name="full_text" type="text" placeholder="write the full text here" rows=7></textarea>
                <textarea name="user_first_name" type="text" placeholder="write your name here" rows=1></textarea>
                </div>
                <div>
                <button type="submit" name="creator" class="square-button creator" onClick="document.location ='index.php#blog'">Create it!</button>
                </div>
            </form>
            <?php
            $GetTitle = $_GET['title'] ?? "";
            $GetDescription = $_GET['description'] ?? "";
            $GetFullText = $_GET['full_text'] ?? "";
            $GetImg = $_GET['img_url'] ?? "";
            $GetUserName = $_GET['user_first_name'] ?? "";


            $dbconnect = mysqli_connect("localhost","root", "", "altshu_final_project");
                mysqli_query($dbconnect, "SET NAMES 'utf8'");

            if ((!(empty($GetTitle))) && (!(empty($GetDescription)))&&((!(empty($GetImg))))) {
                $queryCreateNews = "INSERT INTO `news`(`title`, `description`, `img_url`, `full_text`) VALUES ('".$GetTitle."','".$GetDescription."','".$GetImg."','".$GetFullText."')";
                mysqli_query($dbconnect, $queryCreateNews);
                unset($GetTitle);
                unset($GetDescription);
                unset($GetImg);
                header('location: index.php#blog');
                exit();
                
            } 
            ?>
        </article>    
    </main>
</body>
</html>