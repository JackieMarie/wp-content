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
  <!--Certifications -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('certification'); ?>
    </div>
  </div>
  <!--Our Crew -->
  <main class="row green">
    <div class="eight columns">
      <?php dynamic_sidebar('safety-crew'); ?>
    </div>
  </main>
  <!--Current Safety Record -->
    <div class="row">
      <div class="four columns">
        <?php dynamic_sidebar('incident-count'); ?>
      </div>
      <div class="eight columns">
        <?php dynamic_sidebar('safety-record-text'); ?>
      </div>
    </div>
  <!--AIMSIO Application -->
  <div class="row grey">
    <div class="four columns">
      <?php dynamic_sidebar('aimsio-image'); ?>
    </div>
    <div class="eight columns">
      <?php dynamic_sidebar('aimsio-text'); ?>
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
