<?php /*Template Name: Home Page */ ?>

<div class="container">
  <!--Header Image Section -->
  <header class="row">
    <section class="twelve columns">
      <?php dynamic_sidebar('header-image-hom'); ?>
    </section>
  </header>
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


  <!--Call To Action Section  -->

</div>

<?php get_footer(); ?>
