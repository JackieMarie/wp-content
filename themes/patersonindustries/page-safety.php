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
  <!--Certifications -->
  <section class="row">
    <article class="twelve columns">
      <?php dynamic_sidebar('certification'); ?>
    </article>
  </section>
  <!--Our Crew -->
<<<<<<< HEAD
  <main class="row">
    <section class="six columns">
=======
  <main class="row green">
    <div class="eight columns">
>>>>>>> b04aa907fbc6726344a395a895b5eed34bb83500
      <?php dynamic_sidebar('safety-crew'); ?>
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
<<<<<<< HEAD
  <section class="row">
    <article class="four columns">
=======
  <div class="row grey">
    <div class="four columns">
>>>>>>> b04aa907fbc6726344a395a895b5eed34bb83500
      <?php dynamic_sidebar('aimsio-image'); ?>
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
