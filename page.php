
<?php
/*
Template Name: normal page
*/
?>

<?php get_header(); ?>

    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Page Found'); ?></p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
