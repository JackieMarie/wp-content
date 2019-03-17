<?php /*Template Name: Single Post */ ?>

<?php get_header(); ?>

<main class="container">
  <section class="row">
    <article class="twelve columns">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <h2 class="post-title black"><?php the_title(); ?></h2>
            <h6 class="post-date black"><?php echo "Published on: " . get_the_date(); ?></h6>
            <div class="post-feature">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="post-content black">
              <?php the_content(); ?>
            </div>
            <div class="pagination-single">
              <?php previous_post_link('%link', '<< Previous Post'); ?>
            </div>
            <div class="pagination-single">
              <?php next_post_link('%link', 'Next Post >>'); ?>
            </div>
          <?php }
        }
      ?>
    </article>
  </section>
</main>

<?php get_footer(); ?>
