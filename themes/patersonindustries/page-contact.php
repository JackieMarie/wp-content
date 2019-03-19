<?php /*Template Name: Contact Page */ ?>

<?php get_header(); ?>

<main class="container">
  <section class="row">
    <!--Hero Image Section -->
    <article class="row">
      <div class="twelve columns">
        <?php dynamic_sidebar('header-image-contact'); ?>
      </div>
    </article>
  </section>
  <section class="row">
    <article class="six columns">
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
    <article class="six columns">
      <?php get_sidebar(); ?>
    </article>
  </section>
  </main>
<?php get_footer(); ?>
