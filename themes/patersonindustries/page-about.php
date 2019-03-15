<?php /*Template Name: About Page */ ?>

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
  <!--Manifesto Section  -->
  <main class="row">
    <div class="seven columns">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content();
          } //ends while loop
        } //ends if statement
       ?>
    </div>
  <!--Widget for Triangle image -->
    <div class="five columns">

    </div>
  </main>
  <!--Two Widgets for Equipment and Experience -->


  <!--Widgets for Crew -->

  <!--Widgets for Community Involvement -->

  <!--Call To Action Section -->

  <section class="row">
    <div class="twelve columns">
        <?php dynamic_sidebar('call-to-action'); ?>
    </div>
  </section>
</div>


<?php get_footer(); ?>
