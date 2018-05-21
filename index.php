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
        <main class="mt-2 mt-sm-5 ">
            <section id="work">
                <h2 class="sub-heading mb-5 d-none d-sm-block">My Work</h2>
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
            
            
        </main>
        <?php require_once 'footer.php'; ?>
    </body>
</html>