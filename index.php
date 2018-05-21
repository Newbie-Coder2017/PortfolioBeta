<?php
$pageTitle = "Paul Ooi Web Development & Design";
$customCSS = 
"<link href='portfolio/CSS/home.css' type='text/css' rel='stylesheet'/>".
             "<link href='portfolio/CSS/banner.css' type='text/css' rel='stylesheet'/>";
require_once 'head.php';
require_once 'project-collection.php';
?>
<!-- WELCOME TO MY PORTFOLIO HOMEPAGE CODE! 
  THANKS FOR BEING INTERESTED IN CHECKING OUT THE BUILDING BLOCKS OF THIS PAGE. 
  HERE, I'M USING BOOTSTRAP AND PHP TO HELP ME DISPLAY MY PROJECTS IN A CONSISTENT STYLE. 
  IF YOU HAVE QUESTIONS, OR NEED A DEVELOPER TO BUILD SOMETHING GREAT, CONTACT ME!
  ENJOY VISITING MY PORTFOLIO.
  -PAUL-  
-->
    <body class="container">
        <header>
            <?php require_once 'main-nav.php';?>
            <section id="banner" class="container d-flex flex-wrap flex-sm-nowrap justify-content-center align-items-sm-end align-items-md-center align-items-lg-start">
                <div class="order-1">
                    <h1 id="job-titles" class="text-center text-sm-left my-5 mt-sm-0 mb-sm-3 my-md-4">Developer<span id="designer"><span id="plus">+</span>Designer</span></h1>
                    <div id="intro">
                        <p>Hi there, my name is Paul.</p>
                        <p>I create responsive websites with a user-focused experience.</p>
                    </div>
                </div>
                <div id="self-portrait" class="order-2 order-sm-0 text-center">
                    <!-- Place self portrait image here -->
                    <img id="mobile" src="portfolio/assets/portraits/SelfPortrait-Looking-up.png" alt="picture of me looking up peeking out from behind a wall" class="img-fluid"/>
                    <img id="tablet" src="portfolio/assets/portraits/SelfPortrait-ArmsCrossed.png" alt="picture of me with arms crossed" class="img-fluid"/>
                    <img id="desktop" src="portfolio/assets/portraits/SelfPortrait-Leaning.png" alt="picture of me leaning against my job titles" class="img-fluid"/>
                </div>
            </section>
        </header>
        <main class="mt-2 mt-sm-5">
            <section id="work">
                <h2 class="mb-5 d-none d-sm-block text-center">My Work</h2>
                <!-- PROJECT GALLERY THUMBNAILS -->
                <div id="gallery" class="row justify-content-lg-around">
                    <figure class="d-none d-sm-block col-6 col-lg-3 text-center img-container">
                        <a href="#seasoningShack">
                        <img src="portfolio/assets/images/thumb-restaurant.jpg" alt="A screenshot of the Seasoning Shack restaurant home page with white dishes and street view exterior of restaurant locations" class="img-thumbnail img-fluid"/>
                        </a>
                    </figure>
                    <figure class="d-none d-sm-block col-6 col-lg-3 text-center img-container">
                        <a href="#happyTrails">
                        <img src="portfolio/assets/images/thumb-happy-trails.jpg" alt="Screenshot of Happy Trails web application, showing logo and map" class="img-thumbnail img-fluid"/>
                        </a>
                    </figure>
                    <figure class="d-none d-sm-block col-6 col-lg-3 text-center img-container active">
                        <a href="#animatedHouse">
                        <img src="portfolio/assets/images/thumb-css-animation.jpg" alt="A simple cartoon style house with solid blue sky background" class="img-thumbnail img-fluid"/>
                        </a>
                    </figure>
                    <figure class="d-none d-sm-block col-6 col-lg-3 text-center img-container">
                        <a href="#spaceColonies">
                        <img src="portfolio/assets/images/thumb-space-colonies.jpg" alt="Screenshot of Space Colonies game with planets, satelites and transmission beams connecting satelites" class="img-thumbnail img-fluid"/>
                        </a>
                    </figure>
                </div>
                <!-- PROJECT DESCRIPTION MODULES -> USING PHP, OF COURSE, YOU'LL ONLY SEE THE HTML :) -->
                <?php foreach ($projects as $p) : ?>
                    <?php include 'project-view.php'?>
                <?php endforeach; ?>
            </section>
            <div id="contact" class="row">
                <section id="messageForm" class="d-none d-sm-block mx-0 p-3 col-12 col-lg-8">
                    <h2 class="text-center py-3">Let&#39;s work together</h2>
                    <form action="#" method="post" name="contact" class="container-fluid px-2">
                        <div class="row mb-3 mb-lg-5 justify-content-between">
                            <div class="col-4 pl-0">
                                <label class="p-2" id="name-lbl" for="name-input">Your Name</label>
                                <input  class="col-12 py-2" type="text" id="name-input" name="user_name" required >
                            </div>
                            <div class="col-8 px-0">
                                <label class="p-2" id="email-lbl" for="email-input">Your E-mail</label>
                                <input class="col-12 py-2" type="email" id="email-input" name="email" required>
                            </div>
                        </div>
                        <div class="row mb-3 mb-lg-5">
                            <label class="p-2" id="message-lbl" for="message">Your Project details</label>
                            <textarea class="col-12" id="message" name="message"></textarea>
                        </div>
                        <div class="row">
                            <input class="btn" type="submit" value="Send Message">
                            <label class="col-8" id="feedback"></label>
                        </div>
                    </form>
                </section>            
                <section class="container contact mx-0 p-3 col-12 col-lg-4" id="social">
                    <h2 class="text-center py-4">Let&#39;s get connected</h2>
                    <ul class="row mb-2 px-lg-1 pl-xl-4 align-items-center flex-lg-column">
                        <li class="col-4 col-lg-12 mb-md-3 text-center text-lg-left">
                            <a href="https://github.com/paul-ooi" target="_blank"><span class="fab fa-github-square" aria-hidden="true"></span><span class='contact-text m-0 ml-md-2'>Fork me on Github</span></a>
                        </li>
                        <li class="col-4 col-lg-12 mb-md-3 text-center text-lg-left">
                            <a href="https://linkedin.com/in/paulooi" target="_blank"><span class="fab fa-linkedin" aria-hidden="true"></span><span class='contact-text m-0 ml-md-2'>Connect with me on LinkedIn</span></a>
                        </li>
                        <li class="col-4 col-lg-12 mb-md-3 text-center text-lg-left">
                            <a href="https://behance.net/paulooidesign" target="_blank"><span class="fab fa-behance-square" aria-hidden="true"></span><span class='contact-text m-0 ml-md-2'>Follow me on Behance</span></a>
                        </li>
                    </ul>
                </section>
            </div>
            
        </main>
        <?php require_once 'footer.php'; ?>
    </body>
</html>