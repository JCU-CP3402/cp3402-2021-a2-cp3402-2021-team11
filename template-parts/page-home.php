<?php
/**
  *  Template Name: Home page
*/
get_header();
?>
<!-- First background -->
<div class="relative">
  <div class="w-full overflow-hidden">
    <img style="height:26rem;" class="w-full object-cover" src="<?php echo get_template_directory_uri() ?>/assets/img/home_bg.jpg" alt="">
  </div>
  <div class="absolute top-0 left-0 px-10 md:px-20 lg:px-36 py-20 text-white w-full h-full home__bg-opactity">
    <div class="font-semibold mb-5">WE ARE AUTISM SUPPORT GROUP</div>
    <div class="grid font-sans text-2xl md:text-5xl lg:text-6xl mb-14">
      <div class="mb-1 lg:mb-4"><span class="font-semibold">A Strong Image</span> of</div>
      <div>Yourself is Our Success</div>
  </div>
  <a class="w-max px-10 py-5 rounded-lg bg-blue-500 text-white font-semibold" href="/about-us/">ABOUT US</a>
  </div>
</div>

<!-- Aldult, Children, Business -->
<div class="grid grid-cols-1 md:grid-cols-3">
  <div class="grid bg-blue-900 text-white p-14">
    <div class="text-4xl font-bold mb-5">Adults’ Group for People with ASD</div>
    <div class="text-base font-semibold mb-5">
    Formed in November 2010, the group meets on the first Saturday of the month around 6:00pm.
    The meet-up provides an opportunity for adults with ASD to interact with one another and other community members.
    </div>
  </div>

  <div class="grid bg-green-500 text-white p-14">
    <div class="text-4xl font-bold mb-5">The Adolescents’ Group</div>
    <div class="text-base font-semibold mb-5">
    Formed in April 2010, a social group of young people aged between 
    12 to 17 years meets on the last Sunday of the month. Activities 
    include cooking, handicrafts, xbox gaming and a variety of board games.
    </div>
  </div>

  <div class="grid p-14  bg-gray-200">
    <div class="text-4xl font-bold mb-5">IT Group</div>
    <div class="text-base font-semibold mb-5">
    Recently formed! If you are in high school or a young adult 
    (to age 20), interested in game design, social media or web 
    design. You may like to join a group of other like-minded young 
    people to learn more and share ideas in technology. This group 
    will meet from 2:00 pm – 4:00 pm on the second Sunday of the month.
    </div>
  </div>
</div>

<!-- Who are we -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-10 m-12 lg:m-28">
  <div class="w-full h-64 lg:h-96 overflow-hidden rounded-lg shadow-lg">
    <img
      class="object-cover w-full h-64 lg:h-96"
      src="<?php echo get_template_directory_uri() ?>/assets/img/home_bg2.jpg"
      alt="bg">
  </div>
  <div class='grid grid-flow-row auto-rows-max place-content-center'>
    <div class="font-semibold text-gray-500 mb-5">WHO WE ARE</div>
    <div class="text-3xl mb-5">We Are The Best <span class="font-bold">Support for You</span></div>
    <div class="w-20 border-t border-gray-300"></div>
    <div class="my-5 text-xl text-gray-500">
      While we are working in the community to achieve this we also recognize 
      those individuals and organizations who are “Autism Friendly.” Once per 
      year we nominate and award those who show care and consideration towards 
      the Autism community.
    </div>
    <a class="w-max px-10 py-5 rounded-lg bg-blue-500 text-white font-semibold" href="/about-us/">ABOUT US</a>
  </div>
</div>

<!-- years of experience -->
<div class="relative">
  <div class="w-full">
    <img class="w-full object-cover home__bg-3" src="<?php echo get_template_directory_uri() ?>/assets/img/home_bg3.jpg" alt="bg">
  </div>
  <div class="absolute top-0 left-0 w-full h-full grid grid-cols-2 lg:grid-cols-4 px-14 md:px-20 py-16 text-white">
    <div class="grid justify-items-center mb-10">
      <img class="w-10 h-10 sm:w-20 sm:h-20" src="<?php echo get_template_directory_uri() ?>/assets/icon/calendar.png" alt="icon">
      <div class="text-2xl sm:text-5xl my-2 font-bold">10+</div>
      <div class="text-center">Year of Experience</div>
    </div>

    <div class="grid justify-items-center mb-10">
      <img class="w-10 h-10 sm:w-20 sm:h-20" src="<?php echo get_template_directory_uri() ?>/assets/icon/in-house.png" alt="icon">
      <div class="text-2xl sm:text-5xl my-2 font-bold">154</div>
      <div class="text-center">In-House Staff</div>
    </div>

    <div class="grid justify-items-center mb-10">
      <img class="w-10 h-10 sm:w-20 sm:h-20" src="<?php echo get_template_directory_uri() ?>/assets/icon/medical.png" alt="icon">
      <div class="text-2xl sm:text-5xl my-2 font-bold">45+</div>
      <div class="text-center">Branches</div>
    </div>

    <div class="grid justify-items-center mb-10">
      <img class="w-10 h-10 sm:w-20 sm:h-20" src="<?php echo get_template_directory_uri() ?>/assets/icon/therapy.png" alt="icon">
      <div class="text-2xl sm:text-5xl my-2 font-bold">1510</div>
      <div class="text-center">Successesful Therapy</div>
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