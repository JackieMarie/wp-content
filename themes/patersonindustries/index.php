<?php get_header(); ?>

<main class="container">
  <section class="row">
  <?php
    if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="twelve columns">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="category-label">
            Category: <?php the_category(); ?>
          </p>
          <?php the_post_thumbnail('medium'); ?>
          <?php the_excerpt(); ?>
          <?php
              $archive_year = get_the_time('Y');
              $archive_month = get_the_time('m');
              $archive_day = get_the_time('d');
           ?>
           <div class="post-info">
             <h6 class="post_title-footer">Published: <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date(); ?></a></h6>
          </div>
        </div>
        <?php  } //ends while loop
      } //ends if statement
    ?>
  </section>
  <section class="row">
    <div class="pagination-links">
     <?php
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
         ) );
        ?>
      </div>
   </section>
 </main>


 <?php get_footer(); ?>
