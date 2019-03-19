<?php /*Template Name: Home Page */ ?>

<?php get_header(); ?>

<div class="container">
  <!--Header Image Section -->
  <header class="row">
    <section class="twelve columns">
      <?php dynamic_sidebar('header-image-home'); ?>
    </section>
  </header>
  <!--WP LOOP -->
  <section class="row">
    <article class="twelve columns">
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
  <!--WORK HARD - STAY SAFE - BE HUMBLE Section -->
  <main class="row">
    <section class="one-third column">
        <?php dynamic_sidebar('work-hard'); ?>
    </section>
    <section class="one-third column">
        <?php dynamic_sidebar('stay-safe'); ?>
    </section>
    <section class="one-third column">
        <?php dynamic_sidebar('be-humble'); ?>
    </section>
  </main>
  <!--Testimonial Section  -->
  <section class="row">
    <article class="twelve columns">
        <?php dynamic_sidebar('testimonials'); ?>
    </article>
  </section>
  <!--Projects Section  -->
  <section class="row">
    <article class="twelve columns">
        <?php dynamic_sidebar('projects'); ?>
    </article>
  </section>
  <!--Call To Action Section  -->
  <section class="row">
    <article class="twelve columns">
        <?php dynamic_sidebar('call-to-action'); ?>
    </article>
  </section>

<?php get_footer(); ?>
