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
<div class="container text-center">
    <h1>List of all Policies!</h1>
    <div class="row">
        <div class="col">Terms of Use</div>
        <div class="col">Fraud Warning</div>
        <div class="col">FAQ's</div>
    </div>
    <div class="row">
        <div class="col">Cookies Policy</div>
        <div class="col">Privacy Policy</div>
        <div class="col">Online Policy</div>
    </div>
    <div class="row">
        <div class="col">Your Personal Information</div>
        <div class="col">Shipping Policy</div>
        <div class="col">Accessibility Policy</div>
    </div>
</div>
<hr />
<div class="container text-center">
<?php
    the_content();
    // air_edit_link();
  ?>
  </div>
<?php get_footer();
?>
