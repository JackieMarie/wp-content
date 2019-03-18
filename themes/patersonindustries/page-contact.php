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
    <article class="twelve columns">
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
    <div class="twelve columns">
      <form name="contactform" method="post" action="send_form_email.php">
        <fieldset>
          <input type="text" name="name" maxlength="50" size="30" placeholder="Name or Company">
          <input type="email" name="email" maxlength="50" size="30" placeholder="Email Address">
          <input type="tel" name="telephone" maxlength="30" size="30" placeholder="Phone Number">
          <select name="reasons">
              <option value="interest" disabled selected>I am interested in....</option>
              <option value="construction">Facility Construction</option>
              <option value="maintenance">Maintenance</option>
              <option value="turn">Turn Around and Shut Down</option>
              <option vale="other">Other (please explain below)</option>
              <option value="hi">Just sayin' hi!</option>
          </select>
          <textarea name="comments" maxlength="2500" cols="25" rows="6" placeholder="Leave your message here..."></textarea>
          <input type="submit" value="Submit">
        </fieldset>
      </form>
      <?php dynamic_sidebar('call-to-action'); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
