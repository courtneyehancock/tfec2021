<?php /*Template Name: Committees Page Template*/ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
      <div class="col-md-9">
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
      <div class="col-md-3">
        <?php get_sidebar(); ?>

      </div>
    </div>
</div>

<?php get_footer(); ?>
