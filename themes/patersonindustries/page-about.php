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
  <article class="six columns">
    <?php get_sidebar(); ?>
  </article>
  </main>
  <!--Two Widgets for Equipment and Experience -->
    <div class="row" id="pipe-background">
      <div class="seven columns">
        <?php dynamic_sidebar('equipment-image'); ?>
      </div>
      <div class="five columns">
        <?php dynamic_sidebar('equipment-text'); ?>
      </div>
    </div>
  <!--Widgets for Crew -->
  <div class="row med-blue">
    <div class="three columns">
      <?php dynamic_sidebar(''); ?>
    </div>
    <div class="three columns">
      <?php dynamic_sidebar('crew-image'); ?>
    </div>
    <div class="six columns">
      <?php dynamic_sidebar('crew-text'); ?>
    </div>
  </div>
  <!--Widgets for Community Involvement -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('community-slider'); ?>
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
