<?php
/**
 * The template for displaying all single posts
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-09-07 11:57:39
 *
 * @package air-light
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

namespace Air_Light;

the_post();
get_header(); ?>

<main class="site-main">

  <section class="block block-single">
    <article class="article-content">

      <h1><?php the_title(); ?></h1>

      <?php the_content();

      // Required by WordPress Theme Check, feel free to remove as it's rarely used in starter themes
      wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'air-light' ), 'after' => '</div>' ) );

      entry_footer();

      ?>

    </article>
  </section>

</main>

<?php get_footer();
