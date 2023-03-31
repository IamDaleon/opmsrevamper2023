<?php
/**
 * The template for displaying front page
 *
 * Contains the closing of the #content div and all content after.
 * Initial styles for front page template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-05-25 20:18:40
 *
 * @package air-light
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Air_Light;

// Featured image for Theme Checker (it's a requirement for theme to pass in official Theme directory)
// NB! Our dev version uses newtheme.sh build script which cleans ups things including this next line
$thumbnail = wp_get_attachment_url( get_post_thumbnail_id() ) ?: THEME_SETTINGS['default_featured_image'];


get_header(); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block h-80 w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/water.jpg" width='1200vw' height='1200vh' alt=""" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block h-80 w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/advent.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block h-80 w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/greenery.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- <main class="site-main"> -->
  
  <!-- <h1>Hello World!</h1> -->
  <div class="container text-center">
      <h1>- By Category -</h1>
      <div class="container">
  <div class="row">
    <div class="col-sm">
    <a href="/product-tag/kratom/"><h1>Kratom</h1></a>
    </div>
    <div class="col-sm">
    <a href="/product-tag/kratom-alternative/"><h1>Kratom Alternatives</h1></a>
    </div>
    <div class="col-sm">
      <a href="/product-tag/incense-smudge/"><h1>Incense & Smudge</h1></a>
    </div>
    <div class="col-sm">
      <a href="/product-tag/specialty-herbs/"><h1>Specialty Herbs</h1></a>
    </div>
  </div>
</div>
  </div>
  <!-- ADS -->
  <div class="container-fluid adsSection">
    <h1>New Arrivals</h1>
  </div>
  <!-- ADS END  -->
  <div class="container-md spacer">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block h-50 w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/advent.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/advent.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/advent.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
<!-- BY BRAND -->
  <div class="container text-center">
      <h1>- By Brand -</h1>
      <div class="container">
  <div class="row">
    <div class="col-sm">
    <a href="/product-category/chief-kratom/"><h1>Chief Kratom</h1></a>
    </div>
    <div class="col-sm">
    <a href="/product-category/o-p-m-s-kratom/"><h1>O.P.M.S. Kratom</h1></a>
    </div>
    <div class="col-sm">
    <a href="/product-category/remarkable-herbs/"><h1>Remarkable Herbs</h1></a>
    </div>
    <div class="col-sm">
    <a href="/product-category/satya-sai-baba/"><h1>Satya Sai Baba</h1></a>
    </div>
    <div class="col-sm">
      <a href="/product-category/whole-herbs/"><h1>Whole Herbs</h1></a>
    </div>
    <div class="col-sm">
      <a href="/product-category/xxx-kratom/"><h1>XXX Kratom</h1></a>
    </div>
  </div>
</div>
  </div>
  <!-- BRAND END -->

  <!-- ADS -->
  <div class="container-fluid adsSection">
    <h1>New ADS</h1>
  </div>
  <!-- ADS END  -->
  <div class="container text-center">
      <h1>- LATEST FROM THE PRESS -</h1>
      <div class="container">
  <div class="row">
    <div class="col-sm">
    <a href="/product-category/chief-kratom/">
      <div class="card">
      <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/advent.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">O.P.M.S. <br />KRATOM RED</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <br />
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </a>
    </div>
    <div class="col-sm">
    <a href="/product-category/o-p-m-s-kratom/">
      <div class="card">
      <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/greenery.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">
          INCENSE & SMUDGE
        </h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <br />
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </a>
    </a>
    </div>
    <div class="col-sm">
    <a href="/product-category/remarkable-herbs/">
      <div class="card">
      <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/advent.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">OPMS <br />KRATOM SILVER</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <br />
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </a>
    </a>
    </div>
  </div>
  </div>
  </div>
  </div>
  
<!-- ADS -->
<div class="container-fluid adsSection">
    <h1>Newsletter Sign-ups</h1>
  </div>
  <!-- ADS END  -->
  <?php
    the_content();
    // air_edit_link();
  ?>
<?php get_footer();
