<div class="project row px-1 px-md-3 px-lg-5">
    <div id="<?php echo $p['projectAnchorId']; ?>" class="project-anchor"></div><!--  USE ANCHOR FOR CLICK TO POINTS -->
    <div class="col-12 col-md-6 order-2">
        <h3 class="project-name row mb-3 mb-md-5"><?php echo $p['projectTitle']; ?></h3>
        <ul class="technology d-none d-sm-block">
            <?php foreach ($p['technologies'] as $t) :?>    
                <li><?php echo $t; ?></li>
            <?php endforeach; ?>
        </ul>        
    </div>
    <figure class="col-12 col-md-6  order-1">
        <img src="portfolio/assets/images/<?php echo $p['thumbnailFilename']; ?>" alt="<?php echo $p['thumbnailAltTag']; ?>" class="img-fluid"/>
    </figure>
    <div class="controls col-12 row justify-content-around mb-sm-3 mb-md-2 order-3 order-md-4">
        <a href="<?php echo $p['projectURL']; ?>" class="btn col-12 col-sm-4 col-md-4 col-lg-4  text-center align-middle">Live Site</a>
        <?php if (isset($p['projectCodeURL'])) :?>
            <a href="<?php echo $p['projectCodeURL']; ?>" target="_blank" class="btn d-none d-sm-block col-12 col-sm-4 col-md-4 col-lg-4 text-center align-middle">View Code</a>
        <?php endif;?>
    </div>
    <p class="description col-12 px-5 px-md-3 my-md-3 mx-md-2 d-none d-sm-block order-4 order-md-3"><?php 
    echo html_entity_decode($p['projectDescription'], ENT_HTML5, 'utf-8');?></p>
</div>

