<?php /*Template Name: Registration Page Template*/ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>

              <h2><?php the_title(); ?></h2>
              <?php the_content();
            }
          }
        ?>
      </div>
    </div>
</div>

<?php get_footer(); ?>
