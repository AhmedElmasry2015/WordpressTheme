<?php get_header();?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src='https://cdn.pixabay.com/photo/2018/02/17/12/37/liverwort-3159876_960_720.jpg' alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src='https://cdn.pixabay.com/photo/2017/12/30/08/41/panoramic-3049543_960_720.jpg' alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src='https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832_960_720.jpg' alt="Third slide">
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

<?php get_footer();?>