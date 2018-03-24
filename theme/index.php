<?php get_header();?>
<div class="contain">
        <h2>Title</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/images/one.jpg" alt="First slide">
                      <div class=" image-content ">
                      <p class="image-header">Fullwidth Slider Background Image</p>
                      <p class="image-text">30 Lorem ipsum dolor sit amet consectetur adipisicing elit Eaque porro illum eoslaudantium!.
                                  <br> Impedit delectus dolorem commodi eum doloribus tenetur rem illum repellendus.
                                  <br> Cumque sed quasi magnam suscipit illum cupiditate .
                      </p>
                      <button class="image-button popmake-80"> <!--<a href="<?//php bloginfo('template_url'); ?>/project1.php">-->learm more</a></button>
                     
                    </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/images/two.jpg" alt="Second slide">
                    <div class=" image-content ">
                        <p class="image-header">Fullwidth Slider Background Image</p>
                        <p class="image-text">30 Lorem ipsum dolor sit amet consectetur adipisicing elit Eaque porro illum eoslaudantium!.
                                <br> Impedit delectus dolorem commodi eum doloribus tenetur rem illum repellendus.
                                <br> Cumque sed quasi magnam suscipit illum cupiditate .
                        </p>
                        <button class="image-button popmake-87"> <!--<a href="<?//php bloginfo('template_url'); ?>/project1.php">-->learm more</a></button>
                    </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/images/four.jpg" alt="Third slide">
                    <div class=" image-content "><!--d-none d-md-block-->
                        <p class="image-header">Fullwidth Slider Background Image</p>
                        <p class="image-text">30 Lorem ipsum dolor sit amet consectetur adipisicing elit Eaque porro illum eoslaudantium!.
                            <br> Impedit delectus dolorem commodi eum doloribus tenetur rem illum repellendus.
                            <br> Cumque sed quasi magnam suscipit illum cupiditate .
                        </p>
                        <button class="image-button popmake-90">learm more</a></button>
                    </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>    
    </div>
    
    <!-- End Slider Section -->

    <!-- Start images Sectoion-->

    <div class="row text-section">
        <div class="col-md-3">
            Text1
        </div>
        <div class="col-md-3">
            Text2
        </div>
        <div class="col-md-3">
            Text3
        </div>
        
        <div class="col-md-3">
            Text4
        </div>
    </div>
    <p class="bord"></p>
    <div class="row image-section text-center">
            <div class="col-md-3">
                <img class=" image-text img-thumbnail" src="<?php bloginfo('template_url'); ?>/images/text5.jpg" alt="Iamge1">
            </div>
            <div class="col-md-3">
                <img class=" image-text img-thumbnail" src="<?php bloginfo('template_url'); ?>/images/text3.png" alt="Iamge1">
            </div>
            <div class="col-md-3">
                <img class=" image-text img-thumbnail" src="<?php bloginfo('template_url'); ?>/images/text4.png" alt="Iamge1">
            </div>
            
            <div class="col-md-3">
                <img class=" image-text img-thumbnail" src="<?php bloginfo('template_url'); ?>/images/text5.jpg" alt="Iamge1">
            </div>
    </div>

<?php get_footer();?>