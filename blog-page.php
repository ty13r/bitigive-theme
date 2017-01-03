
<?php
/*
Template Name: blog page
*/
?>

<?php get_header(); ?>

    <?php if(have_posts()) : ?>
        <div class="container">
          <div class="row">
            <div class="col-xs-12 blog-main">
        <?php while(have_posts()) : the_post(); ?>
      <div class="blog-post">
        <h2 class="blog-post-title">
            <?php the_title(); ?>
        </h2>

        <?php the_content(); ?>
      </div><!-- /.blog-post -->
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Page Found'); ?></p>
      </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
