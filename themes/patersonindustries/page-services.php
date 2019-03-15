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
  <!--Our Services Section  -->
  <main class="row">
    <div class="seven columns">
      <?php dynamic_sidebar('service-content'); ?>
    </div>
  <!--Widgets for Triangle images -->
    <div class="five columns">

    </div>
  </main>
  <!--Past Projects -->
    <div class="row">
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
