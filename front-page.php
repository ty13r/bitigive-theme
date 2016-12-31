
<?php get_header(); ?>

<section class="showcase">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 text-left">
        <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
        <!-- <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p> -->
        <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" target="_blank" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Donate Now'); ?></a>
        <a href="<?php echo get_theme_mod('btn_url1', 'http://test.com'); ?>" target="_blank" class="btn btn-default btn-lg"><?php echo get_theme_mod('btn_text1', 'Learn More'); ?></a>
      </div>
      <div class="col-sm-5 col-sm-offset-3">
        <div class="donate-wrap row text-left">
            <a class="col-xs-12 col-sm-5 donate-qrcode" href="bitcoin:1PEoUKNxTZsc5rFSQvQjeTVwDE9vEDCRWm?label=BitGive%20Foundation&category=Expense%3ACharity"></a>
            <div class="col-xs-12 col-sm-7">
              <p class="h4 main">Donate Now to Bitgive</p>
              <p class="h4">Wallet Address:</p>
              <a class="address" href="bitcoin:1PEoUKNxTZsc5rFSQvQjeTVwDE9vEDCRWm?label=BitGive%20Foundation&category=Expense%3ACharity">
                1PEoUKNxTZsc5rFSQvQjeTVwDE9vEDCRWm
              </a>
              <p>If you would like a receipt, please use the form on our <a href="donations">donation page</a> and provide your email address.</p>
            </div>
        </div>
        <div class="video-wrap text-left">
          <h3 class="h4">Watch: Our Kenya Water Well Project</h3>
          <iframe width="437" height="245" src="https://www.youtube.com/embed/ESEI6WazuUA?showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="boxes">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-3 col-sm-offset-1 ">
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
      </div>

      <div class="col-xs-6 col-sm-3">
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
      </div>

      <div class="col-xs-6 col-sm-3">
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="featured-articles">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
        <h4>FEATURED IN:</h4>
        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/featured-articles.png" alt="">
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
