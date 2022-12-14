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
            <li onClick="location.href='#about'"><a href="#about">About</a></li>
            <li onClick="location.href='#education'"><a href="#education">My education</a></li>
            <li onClick="location.href='#blog'"><a href="#blog">Blog</a></li>
            <li onClick="location.href='#contacts'"><a href="#contacts">Contacts</a></li>
        </ul>
        <img class="hamburger" src="./assets/Images/hamburger.png" alt="hamburger">
        </div>
    </header>
    <main>
        <article class="start">
            <div class="hi">
                <h3 class="white-text">“Every mountain peak is within reach if you just keep climbing.” </h3>
                <span class="autor">B. Finlay</span>
                <!-- <br> -->
                <p class="white-text inika-22">Hi! I am Yulia, I want to develop in the field of web development and
                    create user-friendly applications.</p>
                <button class="white-button"><a class ="red-text" href="mailto:jul-yaris@yandex.ru">Write me! &#9993;</a></button>
                <footer class="white-text altshu">
                    <img src="./assets/Images/cup.png" alt="cup">
                    <div>
                        <p class="inika-15">Passed the Altshu Web Developing Course</p>
                        <p class="inika-15">WebDevelopment 2022  •  <a href="https://altshu.com/" target="_blank">altshu.com</a></p>
                    </div>
                </footer>
            </div>
            <div class="mountains"></div>
            <!-- <img class="mountains" src="./assets/Images/mountains.png" alt="mountains"> -->
        </article>
        <article class="experience">
            <div class="anchor" id="about"></div>
            <div class="experience_first_part">
                <div class="title-of-article">
                    <img class="wave" src="./assets/Images/red_wave.png" alt="red wave">
                    <h2 class="red-text h2-title-of-article">About</h2>
                </div>
                <div class="review">
                    <img src="./assets/Images/stars.png" alt="five stars">
                    <p class="inika-19"> This is a place for review This is a place for review This is a place for review This is a place for review </p>
                    <img src="./assets/Images/smirnovaa.png" alt="Smirnova Anastasia">
                </div>
            </div>
            <div class="experience_second_part">
                <div>
                    <h3 class="h3-experience_second_part">In the near future I'm going to develop my first websites</h3>
                    <table>
                        <tr class="months">
                            <th>2+</th>
                            <th>2+</th>
                            <th>5</th>
                        </tr>
                        <tr class="inika-22">
                            <td>Months of experience</td>
                            <td>Projects completed</td>
                            <td>Technologies learnt</td>
                        </tr>
                    </table>
                </div>
                <div class="skills">
                    <img src="./assets/Images/HTML+CSS.png" alt="HTML+CSS">
                    <img src="./assets/Images/JS+React.png" alt="JS+React">
                    <img src="./assets/Images/PHP.png" alt="PHP+YII-2">
                    <img src="./assets/Images/my_sql.png" alt="My SQL">
                </div>
            </div>
        </article>
        <article class="results">
            <div class="anchor" id="education"></div>
            <div class="title-of-article">
                <img class="wave" src="./assets/Images/red_wave.png" alt="red wave">
                <h2 class="red-text h2-title-of-article">My education</h2>
            </div>
            <div class="result-sections">
                <h2>The results of education I want to achieve.</h2>
                <section>
                    <img src="./assets/Images/Img_1.png" alt="Image">
                    <h4>I know the basics of UI/UX design</h4>
                    <p class="inika-15 result-comment">I will be able to develop attractive and user-friendly website design</p>
                </section>
                <section>
                    <img src="./assets/Images/Img_2.png" alt="Image">
                    <h4>I can make up the developed design using HTML and CSS</h4>
                    <p class="inika-15 result-comment">I know how to create a page structure and describe the page appearance</p>
                </section>
                <section>
                    <img src="./assets/Images/Img_3.png" alt="Image">
                    <h4>I add interactive content to the pages using JS</h4>
                    <p class="inika-15 result-comment">I know how to set up user interaction with content</p>
                </section>
                <section>
                    <img src="./assets/Images/Img_4.png" alt="Image">
                    <h4>I know how to create a backend for a website using PHP</h4>
                    <p class="inika-15 result-comment">I can make it work)</p>
                </section>
                <section>
                    <img src="./assets/Images/Img_5.png" alt="Image">
                    <h4>I create my first projects</h4>
                    <p class="inika-15 result-comment">In my portfolio there are several interesting projects to start a career in web
                        development</p>
                </section>
                <section class="last-section-of-result">
                <button class="square-button">View all <br>projects</button>
                </section>
            </div>
        </article>
        <article>
            <div class="anchor" id="services"></div>
            <div class="services-block">
                <div class="left-align-sections">
                    <section class="white-text services-first-section">
                        <div class="title-of-article">
                            <img class="wave" src="./assets/Images/white_wave.png" alt="white wave">
                            <h2 class="white-text h2-title-of-article">Services</h2>
                        </div>
                        <h3 class="white-text">Pushing the boundaries of your potential</h3>
                    </section>
                    <section class="white-text services-middle-section">
                        <img src="./assets/Images/symbol_3.png" alt="symbol">
                        <h4>Memorabilia</h4>
                        <p class="inika-19">Choose from easy, affordable options for merch like custom tees and sets of
                            pins.</p>
                    </section>
                </div>
                <div class="center-align-sections">
                    <section class="white-text services-middle-section">
                        <img src="./assets/Images/symbol_1.png" alt="symbol">
                        <h4>Branding</h4>
                        <p class="inika-19">Refresh your logo, revamp your website, and even your letterhead— develop a
                            cohesive aesthetic for your brand.</p>
                    </section>
                    <section class="white-text services-middle-section">
                        <img src="./assets/Images/symbol_4.png" alt="symbol">
                        <h4>Visual Aids</h4>
                        <p class="inika-19">Make your point more convincingly with branded flyers, slides, catalogues,
                            infographics.</p>
                    </section>
                </div>
                <div class="right-align-sections">
                    <section class="white-text services-middle-section">
                        <img src="./assets/Images/symbol_2.png" alt="symbol">
                        <h4>Packaging</h4>
                        <p class="inika-19">Rethink labels, boxes, signage, and everything that'll help your product
                            make a great first impression.</p>
                    </section>
                    <section class="white-text services-last-section">
                        <button class="white-button"><a href="#contacts" class="red-text">Contact me</a></button>
                        <img src="./assets/Images/two_waves.png" alt="two waves">
                    </section>
                </div>
            </div>
        </article>
        <article class="blog">
            <div class="anchor" id="blog"></div>
            <div class="title-of-article">
                <img class="wave" src="./assets/Images/red_wave.png" alt="red wave">
                <h2 class="red-text h2-title-of-article">Blog</h2>
            </div>
            <div class="long-title_button">
                <h2>Words On Design, Tech & Other Things I Love</h2>
                <button class="pink-button">Explore all posts <b>&rarr;</b></button>
            </div>
            <!-- реализовано через JS
                
                <section class="part-of-blog">
                <div class="picture-text">
                    <img  class ="little-img" src="./assets/Images/Little_img_1.png" alt="Little image">
                    <div class="blog-description">
                        <h5 class="red-text date">21 Oct, 2022</h5>
                        <h4>How I've started learning web</h4>
                        <p class="inika-15">My prevus job was not related to web development, but I have exhausted my potential and decided to try a new field of activity.</p>
                    </div>
                </div>
                <div class="view-post">
                    <p class="red-text inika-19">View post &rarr;</p>
                </div>
            </section>
            <hr>
            <section class="part-of-blog">
                <div class="picture-text">
                    <img  class ="little-img" src="./assets/Images/Little_img_2.png" alt="Little image">
                    <div class="blog-description">
                        <h5 class="red-text date">03 Dec, 2022</h5>
                        <h4>Why does JavaScript is so exciting</h4>
                        <p class="inika-15">This programming language allows you to write frontend, backend, create
                            websites, desktop or mobile applications, and even develop games in it.</p>
                    </div>
                </div>
                <div class="view-post">
                    <p class="red-text inika-19">View post &rarr;</p>
                </div>
            </section>
            <hr>
            <section class="part-of-blog">
                <div class="picture-text">
                    <img class ="little-img" src="./assets/Images/Little_img_3.png" alt="Little image">
                    <div class="blog-description">
                        <h5 class="red-text date">20 Dec, 2022</h5>
                        <h4>How I've developed this site</h4>
                        <p class="inika-15">This is my training ground, where I grow my skills)</p>
                    </div>
                </div>
                <div class="view-post">
                    <p class="red-text inika-19">View post &rarr;</p>
                </div>
            </section>
            <hr>-->
        </article>
        <nav class="fast-switch">
            <div class="book-background">
                <h4>My education</h4>
                <p class="inika-15 fast-switch-comment">Favorite projects, award-winning campaigns and more.</p>
                <p class="inika-19 way"><a class="black" href="#education">View all <b>&rarr;</b></a></p>
            </div>
            <div class="red-about">
                <h4 class="white-text">About</h4>
                <p class="white-text inika-15 fast-switch-comment">My journey, career highlights and everything else you need to know.</p>
                <p class="white-text inika-19 way"><a href="#about">Get to know me <b>&rarr;</b></a></p>
            </div>
        </nav>
    </main>
    <footer class="floor">
        <div class="anchor" id="contacts"></div>
        <div class="title-of-article">
            <img class="wave" src="./assets/Images/white_wave.png" alt="white wave">
            <h2 class="white-text h2-title-of-article">Contacts</h2>
        </div>
        <div class="run-string">
            <div class="long-string">
                <h2 class="white-text">Have something in mind?</h2>
                <span class="pink-text"> Let's connect.</span>
                <h2 class="white-text">Have something in mind?</h2>
            </div>
        </div>
        <div class="contacts">
            <div class="hrefs">
                <div class="white-text">
                    <p class="inika-19 foot-href"><a href="#education">My education</a></p>
                    <p class="inika-19 foot-href"><a href="#about">About</a></p>
                    <p class="inika-19 foot-href"><a href="#blog">Blog</a></p>
                    <p  id="start-to-feedback" class="inika-19 foot-href">Leave your feedback</p>
                    <div class="modal-win">
                        <h4>Feedback is important to me!<br>You can write it below:</h4>
                        <form  method="post" class="feedback-form">
                            <p class="part-of-form">Your name:*<input class="input-of-form" id="name" name="name" type="text" required></p>
                            <p class="part-of-form">Your e-mail:*<input class="input-of-form mail" id="e-mail" name="email" type="email"></p>
                            <textarea rows=9 cols=51 id="feedback-text"  name="feedback-text" required></textarea>
                            <div class="form-buttons">
                                <button  class="submit-modal-win" type="button">Submit</button>
                                <button class="reset-modal-win" type="reset">Reset</button>

                                <?php
                                $feedback = $_POST['feedback-text'] ?? "";
                                $useremail = $_POST['email'] ?? "";
                                $userName = $_POST['name'] ?? "";
                                $test = 'не то, что нужно';

                                $fedbackFile = __DIR__ . './feedback.txt';
                                if ((!(empty($userName))) && (!(empty($feedback)))) {
                                    $datetime = date(DATE_ATOM);
                                    file_put_contents($fedbackFile,'Дата размещения: ' . "$datetime" . PHP_EOL . 'Имя пользователя: ' . "$userName" . PHP_EOL . 'E-mail: ' . "$useremail" . PHP_EOL .'Отзыв: '. "$feedback" . PHP_EOL. PHP_EOL. PHP_EOL,
                                FILE_APPEND);
                                }
                                ?>

                            </div>
                        </form>  
                    </div>
                    <div class="thanks">
                        <h4 class="thanks-text">Almost done :)</h4>
                        <h4 class="thanks-text js-content-thanks-text"></h4>
                        <button class="ok-button"></button>
                    </div>
                </div>
                <div class="white-text">
                    <p class="inika-19 foot-href"><a href="https://vk.com/id3467343" target="_blank">vk</a></p>
                    <p class="inika-19 foot-href"><a
                            href="https://spb.hh.ru/applicant/resumes/view?resume=1076dd85ff09626c3a0039ed1f6e31764b6445"
                            target="_blank">hh</a></p>
                    <p class="inika-19 foot-href"><a href="https://github.com/Yuliya-Lov" target="_blank">GitHub</a></p>
                    <p class="inika-19 tel foot-href"><a href="tel:+79117711441">Call me</a></p>
                    <span class="number">+7 911 771 14 41</span>
                </div>
            </div>
            <div class="subscribe">
                <p class="white-text">Subscribe to my weekly newsletter</p>
                <form  method="post"  id="subscribe-form" class="subscribe-me">
                    <input  class="input-subscribe mail" type="email"  name="email-for-sub"  id="email-for-sub" placeholder="e-mail">
                    <button type="button" name="subscribe-button" id="subscribe-button" class="pink-button">Subscribe</button>


                    <?php
                    $emailForSub = $_POST['email-for-sub'] ?? "";

                    $SubscribeMe = __DIR__ . './subscribe-me.txt';
                    if ((!(empty($emailForSub)))) {
                    $datetime = date(DATE_ATOM);
                    file_put_contents($SubscribeMe,'Дата подписки: ' . "$datetime" . PHP_EOL . 'E-mail: ' . "$emailForSub" . PHP_EOL. PHP_EOL. PHP_EOL, FILE_APPEND);
                    }
                    ?>
                    
                </form>
            </div>
        </div>
        <div class="white-text copyright">
            <hr>
            <p>© Powered by Yuliya LOV, 2022</p>
        </div>
    </footer>
    <script src="./assets/script.js"></script>
</body>
</html>