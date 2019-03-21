<?php /*Template Name: Services Page */ ?>

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
  <!--Our Services Section  -->
  <main class="row">
    <div class="seven columns">
      <?php dynamic_sidebar('service-content'); ?>
    </div>
  <!--Widgets for Triangle images -->
    <article class="five columns">
      <?php get_sidebar(); ?>
    </article>
  </main>
  <!--Past Projects -->
    <div class="row" id="pipe-background">
      <div class="twelve columns">
        <?php dynamic_sidebar('past-projects'); ?>
      </div>
    </div>
  <!--Call To Action Section -->
  <section class="row">
    <div class="twelve columns">
        <?php dynamic_sidebar('call-to-action'); ?>
    </div>
  </section>
</div>


<?php get_footer(); ?>
