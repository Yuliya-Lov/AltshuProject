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
            <h3>Edit post!</h3>
            <?php
            $dbconnect = mysqli_connect("localhost","root", "", "altshu_final_project");
            mysqli_query($dbconnect, "SET NAMES 'utf8'");   
            $Id = $_REQUEST['id'];

            $querySelectId = "SELECT * FROM news WHERE id = $Id";
            $SelectedNews = mysqli_query($dbconnect, $querySelectId);        
            $SelectedOne = mysqli_fetch_array($SelectedNews);


            $PostId = $_GET['id'];
                $PostTitle = $_GET['title'] ?? "";
                $PostDescription = $_GET['description'] ?? "";
                $PostFullText = $_GET['full_text'] ?? "";
                $PostImg = $_GET['img_url'] ?? "";
                $PostUserName = $_GET['user_first_name'] ?? "";
            
            echo '<form class="creating-form" metod="GET">
                <div>
                <textarea  class="hide" name="id" type="text" rows=1 cols=51 placeholder=" write the post title here" required>'. $SelectedOne['id'] . '</textarea>
                <textarea name="title" type="text" rows=1 cols=51 placeholder=" write the post title here" required>'. $SelectedOne['title'] . '</textarea>
                <textarea name="description" type="text" rows=3 placeholder="write the post description here" required>' . $SelectedOne['description'] . '</textarea>
                <textarea name="img_url" type="text"  rows=1 cols=51 placeholder="paste the image url here" required>' . $SelectedOne['img_url'] . '</textarea>  
                <textarea name="full_text" type="text" placeholder="write the full text here" rows=7>' . $SelectedOne['full_text'] . '</textarea>
                <textarea name="user_first_name" type="text" placeholder="write your name here" rows=1></textarea>
                </div>';
                echo '<div>
                <form action="/dashboard/project/AltshuProject/enterEdit.php?id='. $PostId . 'title=' .$PostTitle .'description='. $PostDescription .'img_url=' .$PostImg .'" method="POST">
                <input name="edit" type="submit" class="square-button" value="Edit it!">
                </div>';
                if(!(empty($_GET['edit']))) {
                    $PostId = $_GET['id'];
                    $PostTitle = $_GET['title'] ?? "";
                    $PostDescription = $_GET['description'] ?? "";
                    $PostFullText = $_GET['full_text'] ?? "";
                    $PostImg = $_GET['img_url'] ?? "";
                    $PostUserName = $_GET['user_first_name'] ?? "";
                    $dbconnect = mysqli_connect("localhost","root", "", "altshu_final_project");
                mysqli_query($dbconnect, "SET NAMES 'utf8'");
                $queryEditPost = "UPDATE news SET title = '$PostTitle', description = '$PostDescription', img_url = '$PostImg', full_text = '$PostFullText'  WHERE id =  '$PostId'";
                mysqli_query($dbconnect, $queryEditPost);
                unset($pushEdit);
                unset($PostTitle);
                unset($PostDescription);
                unset($PostFullText);
                unset($PostImg);

                header('location:viewPost.php?id='. $PostId .'');
                exit();
                }
                ?>
            </form>
        </article>    
    </main>
</body>
</html>