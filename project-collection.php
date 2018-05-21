<?php 

$projects = [
//    array(
//        'thumbnailFilename' => '',
//        'thumbnailAltTag' => '',
//        'projectTitle' => '',
//        'technologies' => '',
//        'projectURL' => '',
//        'projectCodeURL' => '',
//        'projectDescription' => '',
//    ),
    array(//SEASONING SHACK
        'projectAnchorId' => 'seasoningShack',
        'thumbnailFilename' => 'focus-restaurant.jpg',
        'thumbnailAltTag' => 'A screenshot of the Seasoning Shack restaurant home page with white dishes and street view exterior of restaurant locations',
        'projectTitle' => 'Seasoning Shack Restaurant',
       'technologies' => [
           'JavaScript',
           'HTML5',
           'CSS',
           'Adobe Photoshop',
           'Adobe Illustrator'
        ],
       'projectURL' => 'http://seasoningshack.paulooidesign.ca/',
       'projectCodeURL' => 'https://github.com/paul-ooi/SeasoningShack',
       'projectDescription' => "The Seasoning Shack is a fictitious restaurant that needed a website to showcase their business. This was a group project, and I created the <strong>Event Booking</strong>, <strong>Location</strong> and <strong>Home pages</strong>. The main focus of this task was to discover JavaScript's versatility and usefulness. My pages include an automated promotion slider, form validation, store hours that update depending on current day and time, an accordion-style image gallery, and a responsive navigation header. I also helped with site design and photo editing of the overall site.",
    ),
    array(//HAPPY TRAILS
        'projectAnchorId' => 'happyTrails',
        'thumbnailFilename' => 'focus-happy-trails.jpg',
        'thumbnailAltTag' => 'Screenshot of Happy Trails web app, showing google maps and logo with green background',
        'projectTitle' => 'Happy Trails',
        'technologies' => [
            'PHP',
            'JavaScript',
            'HTML5',
            'CSS',
            'Bootstrap',
            'Adobe Illustrator'
            ],
        'projectURL' => 'https://outdoorhiker.paulooidesign.ca/',
        'projectCodeURL' => 'https://github.com/paul-ooi/happy-trails',
        'projectDescription' => "This database-driven web application combines data from the <a href='https://openweathermap.org/api' target='_blank' >Open Weather Map API</a>, <a href='https://cloud.google.com/maps-platform/maps/' target='_blank'>Google Map API</a> and <a href='https://en.wikipedia.org/api/rest_v1/' target='_blank'>Wikipedia API</a>. Happy Trails provides weather and location information to users to plan their next hiking destination to a provincial or national park in Canada.",
    ),
    array(//ANIMATED HOUSE
        'projectAnchorId' => 'animatedHouse',
        'thumbnailFilename' => 'focus-css-animation.jpg',
        'thumbnailAltTag' => 'A simple cartoon style house with solid blue sky background',
        'projectTitle' => 'Animated House',
        'technologies' => ['HTML5','CSS','LESS','JavaScript'],
        'projectURL' => 'http://buildAHouse.paulooidesign.ca',
        'projectCodeURL' => 'https://github.com/paul-ooi/buildahouse',
        'projectDescription' => "I was experimenting with CSS animation on this project. At the time, I was inspired by <a href='https://dribbble.com/shots/3499449-Responsive-House' target='_blank'>Gal Shir's Responsive House on Dribble</a>, and a side project I was working on with Habitat for Humanity, so I set out to make my own version of a CSS house animation. I used LESS to help code the CSS blocks responsible for the animations and some of browser compatibility. JavaScript was used to listen for user interaction and refresh the animation stage."
    ),
    array(//SPACE COLONIES
       'projectAnchorId' => 'spaceColonies',
       'thumbnailFilename' => 'focus-space-colonies.jpg',
       'thumbnailAltTag' => 'Screenshot of Space Colonies game with planets, satelites and transmission beams connecting satelites',
       'projectTitle' => 'Space Colonies',
       'technologies' => [
           'JavaScript',
           'HTML5',
           'CSS',
           'Adobe Illustrator'
        ],
       'projectURL' => 'https://galaxy-control.herokuapp.com/',
       'projectCodeURL' => 'https://github.com/jwong92/GGJ2018',
       'projectDescription' => 'I joined a team of fellow web developers at the <a href="https://globalgamejam.org/2018/games/space-colonies" target="_blank">Global Game Jam 2018</a>. The theme was <em>"Transmission"</em>. We made a 2‐player online game that requires each player to claim as many planets as possible before their opponent does. I developed the code behind that populated and styled the heads-up display, the planet detail mouseover feature and the initial splash page. I also prepared suitable images for our team to use. <a href="https://galaxy-control.herokuapp.com/" target="_blank">Go ahead, and give it a try</a>. You and your opponent use a separate browser window. 
        ',
    )

]

?>