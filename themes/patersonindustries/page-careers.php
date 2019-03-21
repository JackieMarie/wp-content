<?php /*Template Name: Careers Page */ ?>

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
    <!--Benefits -->
    <div class="row">
      <div class=" twelve column">
        <?php dynamic_sidebar('benefits'); ?>
      </div>
    </div>
    <!--Current Openings -->
    <div class="row">
      <div class=" twelve column">
        <?php dynamic_sidebar(''); ?>
      </div>
    </div>
    <!--Our Culture -->
    <div class="row">
      <div class=" twelve column">
        <?php dynamic_sidebar(''); ?>
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
