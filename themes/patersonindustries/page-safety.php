<?php /*Template Name: Safety Page */ ?>

<?php get_header(); ?>

<div class="container">
  <header class="row">
    <!--Hero Image Section -->
    <div class="row">
      <div class="twelve columns">
        <?php dynamic_sidebar('header-image-about'); ?>
      </div>
    </div>
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
  <!--Certifications -->
  <main class="row">
    <section class="twelve columns">
      <?php dynamic_sidebar('certification'); ?>
    </section>
  <!--Our Crew -->
    <section class="row green">
      <div class="twelve columns">
        <?php dynamic_sidebar('safety-crew'); ?>
      </div>
    </section>
  </main>
  <!--Current Safety Record -->
  <section class="row">
    <article class="four columns">
      <?php dynamic_sidebar('incident-count'); ?>
    </article>
    <article class="eight columns">
      <?php dynamic_sidebar('safety-record-text'); ?>
    </article>
  </section>
  <!--AIMSIO Application -->
  <section class="row">
    <article class="four columns">
      <div class="row grey">
        <div class="four columns">
          <?php dynamic_sidebar('aimsio-image'); ?>
        </div>
      </div>
    </article>
    <article class="eight columns">
      <?php dynamic_sidebar('aimsio-text'); ?>
    </article>
  </section>
  <!--Call To Action Section -->
  <section class="row">
    <article class="twelve columns">
        <?php dynamic_sidebar('call-to-action'); ?>
    </article>
  </section>
</div>

<?php get_footer(); ?>
