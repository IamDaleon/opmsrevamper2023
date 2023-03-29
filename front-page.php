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
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/water.jpg" width='1200vw' height='1200vh' alt=""" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/advent.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/greenery.jpg" alt="Third slide">
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
    <a href="/product-tag/alternatives/"><h1>Alternatives</h1></a>
    </div>
    <div class="col-sm">
    <a href="/product-tag/capsules/"><h1>Capsules</h1></a>
    </div>
    <div class="col-sm">
      <a href="/product-tag/powder/"><h1>Powder</h1></a>
    </div>
    <div class="col-sm">
      <a href="/product-tag/liquid/"><h1>Liquid</h1></a>
    </div>
  </div>
</div>
  </div>

  <div class="container-md">
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

  <div class="container text-center">
      <h1>- By Brand -</h1>
      <div class="container">
  <div class="row">
    <div class="col-sm">
    <a href="/product-tag/alternatives/"><h1>Alternatives</h1></a>
    </div>
    <div class="col-sm">
    <a href="/product-tag/capsules/"><h1>Capsules</h1></a>
    </div>
    <div class="col-sm">
      <a href="/product-tag/powder/"><h1>Powder</h1></a>
    </div>
    <div class="col-sm">
      <a href="/product-tag/liquid/"><h1>Liquid</h1></a>
    </div>
  </div>
</div>
  </div>

  <?php
    the_content();
    // air_edit_link();
  ?>
<?php get_footer();
