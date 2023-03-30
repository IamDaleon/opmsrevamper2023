<?php
/**
 * Navigation layout.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:22:26
 * @Last Modified by:   Tuomas Marttila
 * @Last Modified time: 2023-02-17 10:31:08
 *
 * @package air-light
 */

namespace Air_Light;

?>
<style>
  .menu-items-wrapper {
    top: 100px !important;
    /* width: 150px !important; */
    text-align: center;
  }

  @media only screen and (max-width: 768px) {
    .menu-items-wrapper {
    top: 118px !important;
    /* width: 150px !important; */
    text-align: center;
  }
  } 
</style>
<nav id="nav" class="nav-primary nav-menu" aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">

  <button aria-haspopup="true" aria-expanded="false" aria-controls="nav" id="nav-toggle" class="nav-toggle" type="button">
    <span class="hamburger" aria-hidden="true"></span>
  </button>

  <div id="menu-items-wrapper adjuster" class="menu-items-wrapper">
    <?php wp_nav_menu( array(
      'theme_location' => 'primary',
      'container'      => false,
      'depth'          => 4,
      'menu_class'     => 'menu-items',
      'menu_id'        => 'main-menu',
      'echo'           => true,
      'fallback_cb'    => __NAMESPACE__ . '\Nav_Walker::fallback',
      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'has_dropdown'   => true,
      'walker'         => new Nav_Walker(),
    ) ); ?>
  </div>

</nav>
