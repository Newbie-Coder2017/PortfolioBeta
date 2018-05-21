<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="rgb(174, 33, 66)"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Junior Full Stack web developer based in Toronto, with a background in design. Looking for full-time Front-End development work creating amazing customer experiences and loves to code. This portfolio site showcases database-driven websites and apps using RESTful APIs, CSS Animation, Bootstrap, including a JavaScript browser game and more."/>
    <title><?php echo htmlentities($pageTitle) ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"/>
    <link href="portfolio/CSS/general.css" type="text/css" rel="stylesheet"/>
    <link href="portfolio/css/main-nav.css" rel="stylesheet" type="text/css" />
    <?php if (isset($customCSS)) { echo html_entity_decode($customCSS, ENT_HTML5, 'utf-8'); }?>
</head>
