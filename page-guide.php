<?php /*Template Name: Author's Guide Page Template*/ ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();?>
              <?php the_content();
            }
          }
        ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar('right-sidebar'); ?>

      </div>
    </div>
</div>

<?php get_footer(); ?>
