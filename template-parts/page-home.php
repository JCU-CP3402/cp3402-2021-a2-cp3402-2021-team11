<?php
/**
  *  Template Name: Home page
*/
get_header();
?>
<!-- First background -->
<div class="relative">
  <div class="home__bg-1 w-full overflow-hidden">
    <?php dynamic_sidebar( 'home-bg-1' ); ?>
    
  </div>
  <div class="absolute top-0 left-0 px-10 md:px-20 lg:px-36 py-20 text-white w-full h-full home__bg-opactity">
    <div class="font-semibold mb-5"><?php dynamic_sidebar( 'home-text-1' ); ?></div>
    <div class="grid font-sans text-2xl md:text-5xl lg:text-6xl mb-14">
      <div class="mb-1 lg:mb-4"><span class="font-semibold"><?php dynamic_sidebar( 'home-text-2' ); ?></span></div>
      <div><?php dynamic_sidebar( 'home-text-3' ); ?></div>
  </div>
  <?php dynamic_sidebar( 'home-button-1' ); ?>
  </div>
</div>

<!-- Aldult, Children, Business -->
<div class="grid grid-cols-1 md:grid-cols-3">
  <div class="grid bg-blue-900 text-white p-14">
    <div class="text-4xl font-bold mb-5"><?php dynamic_sidebar( 'home-service-1-title' ); ?></div>
    <div class="text-base font-semibold mb-5">
      <?php dynamic_sidebar( 'home-service-1-content' ); ?>
    </div>
  </div>

  <div class="grid bg-green-500 text-white p-14">
    <div class="text-4xl font-bold mb-5"><?php dynamic_sidebar( 'home-service-2-title' ); ?></div>
    <div class="text-base font-semibold mb-5">
      <?php dynamic_sidebar( 'home-service-2-content' ); ?>
    </div>
  </div>

  <div class="grid p-14  bg-gray-200">
    <div class="text-4xl font-bold mb-5"><?php dynamic_sidebar( 'home-service-3-title' ); ?></div>
    <div class="text-base font-semibold mb-5">
      <?php dynamic_sidebar( 'home-service-3-content' ); ?>
    </div>
  </div>
</div>

<!-- Who are we -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-10 m-12 lg:m-28">
  <div class="home__image-1 w-full h-64 lg:h-96 overflow-hidden rounded-lg shadow-lg">
    <!-- <img
      class="object-cover w-full h-64 lg:h-96"
      src="<?php echo get_template_directory_uri() ?>/assets/img/home_bg2.jpg"
      alt="bg"> -->
    <?php dynamic_sidebar( 'home-image-1' ); ?>
  </div>
  <div class='grid grid-flow-row auto-rows-max place-content-center'>
    <div class="font-semibold text-gray-500 mb-5"><?php dynamic_sidebar( 'home-whoarewe' ); ?></div>
    <div class="text-3xl mb-5"><span class="font-bold"><?php dynamic_sidebar( 'home-whoarewe-title' ); ?></span></div>
    <div class="w-20 border-t border-gray-300"></div>
    <div class="my-5 text-xl text-gray-500">
      <?php dynamic_sidebar( 'home-whoarewe-content' ); ?>
    </div>
    <div class="mt-5">
      <?php dynamic_sidebar( 'home-button-1' ); ?>
    </div>
  </div>
</div>

<!-- years of experience -->
<div class="relative">
  <div class="w-full home__bg-3">
    <?php dynamic_sidebar( 'home-experience-bg' ); ?>
  </div>
  <div class="absolute top-0 left-0 w-full h-full grid grid-cols-2 lg:grid-cols-4 px-14 md:px-20 py-16 text-white">
    <div class="grid justify-items-center mb-10">
      <img class="w-10 h-10 sm:w-20 sm:h-20" src="<?php echo get_template_directory_uri() ?>/assets/icon/calendar.png" alt="icon">
      <div class="text-2xl sm:text-5xl sm:my-2 font-bold"><?php dynamic_sidebar( 'home-experience-number-1' ); ?></div>
      <div class="text-center"><?php dynamic_sidebar( 'home-experience-text-1' ); ?></div>
    </div>

    <div class="grid justify-items-center mb-10">
      <img class="w-10 h-10 sm:w-20 sm:h-20" src="<?php echo get_template_directory_uri() ?>/assets/icon/in-house.png" alt="icon">
      <div class="text-2xl sm:text-5xl my-2 font-bold"><?php dynamic_sidebar( 'home-experience-number-2' ); ?></div>
      <div class="text-center"><?php dynamic_sidebar( 'home-experience-text-2' ); ?></div>
    </div>

    <div class="grid justify-items-center mb-10">
      <img class="w-10 h-10 sm:w-20 sm:h-20" src="<?php echo get_template_directory_uri() ?>/assets/icon/medical.png" alt="icon">
      <div class="text-2xl sm:text-5xl my-2 font-bold"><?php dynamic_sidebar( 'home-experience-num-3' ); ?></div>
      <div class="text-center"><?php dynamic_sidebar( 'home-experience-text-3' ); ?></div>
    </div>

    <div class="grid justify-items-center mb-10">
      <img class="w-10 h-10 sm:w-20 sm:h-20" src="<?php echo get_template_directory_uri() ?>/assets/icon/therapy.png" alt="icon">
      <div class="text-2xl sm:text-5xl my-2 font-bold"><?php dynamic_sidebar( 'home-experience-number-4' ); ?></div>
      <div class="text-center"><?php dynamic_sidebar( 'home-experience-text-4' ); ?></div>
    </div>
  </div>
</div>

<!-- recent post -->
<div class="mt-20 grid justify-items-center mx-12 lg:mx-28">
    <div class="font-semibold mb-5 text-gray-500">INSIGHTS AND NEWS</div>
    <div class="text-4xl mb-20">Our Latest <span class="font-bold">News</span></div>
    
    <div class="home__post grid grid-cols-1 md:grid-cols-3 gap-10">
      <?php
          $lastBlog = new WP_Query('type=post&posts_per_page=3');


          if ( $lastBlog->have_posts() ):
              while ( $lastBlog->have_posts() ):$lastBlog->the_post();?>
                  <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
              <?php endwhile;
          endif;
      ?>
    </div>
</div>

<?php
get_footer();