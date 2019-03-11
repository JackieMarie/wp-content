<?php /*Template Name: About Page */ ?>

<?php get_header(); ?>

<div class="container">
  <section>
    <article id="header-image">
    </article>
    <article>
        <?php if(have_posts()):
              while(have_posts()):
              the_post();
        ?>
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnal('medium'); ?>
        <?php the_content(); ?>

        <?php
          endwhile;
          endif;
        ?>
    </article>
  </section>
</div>

<?php get_footer(); ?>
