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
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/water.jpg" width='1200vw' height='1200vh' alt="" alt="First slide">
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

  <?php
    the_content();
    // air_edit_link();
  ?>
<?php get_footer();
