<?php get_header(); ?>

<main class="container">
  <section class="row">

<?php
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      <h3><?php the_title(); ?></h3>
      <?php the_content(); ?>
      <?php echo get_the_date(); ?>
    <?php  }
        }
    ?>
  </section>
</main>


<?php get_footer(); ?>
