<?php /*Template Name: Page */ ?>

<?php get_header(); ?>

<main class="container">
  <section class="row">
    <article class="twelve columns page-content">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content();
          } //ends while loop
        } //ends if statement
       ?>
    </article>
  </section>
</main>

<?php get_footer(); ?>
