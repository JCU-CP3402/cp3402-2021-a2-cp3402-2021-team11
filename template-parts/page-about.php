<?php
/**
  *  Template Name: Page About Us
*/
get_header();
?>

<?php
    if (have_posts()):
        while ( have_posts() ):the_post();?>
        <div class="grid justify-items-center mx-12 lg:mx-28">
            <h1 class="font-sans text-5xl font-light text-gray-500 my-14"><?php the_title() ?></h1>

            <div class="about__image-1 grid grid-cols-1 md:grid-cols-2 justify-items-center w-full mb-14">
                <?php dynamic_sidebar( 'about-image-1' ); ?>
                <div class="justify-self-stretch grid w-full ml-5 grid-flow-row auto-rows-max">
                    <div class="">
                        <?php the_content() ?>
                    </div>
                    <div class>
                        <div class="about__psychology-progress">
                            <div class="about__account">
                                <div class="about__title-progress"><?php dynamic_sidebar( 'about-feature-1' ); ?></div>
                                <div class="about__percentage-progress">90%</div>
                                <div class="about__account-bar"></div>
                            </div>
                            <div class="about__total-bar"></div>
                        </div>
                        <div class="about__design-progress">
                            <div class="about__account">
                                <div class="about__title-progress"><?php dynamic_sidebar( 'about-feature-2' ); ?></div>
                                <div class="about__percentage-progress">80%</div>
                                <div class="about__account-bar"></div>
                            </div>
                            <div class="about__total-bar"></div>
                        </div>
                        <div class="about__marketing-progress">
                            <div class="about__account">
                                <div class="about__title-progress"><?php dynamic_sidebar( 'about-feature-3' ); ?></div>
                                <div class="about__percentage-progress">70%</div>
                                <div class="about__account-bar"></div>
                            </div>
                            <div class="about__total-bar"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid justify-items-center mb-14">
                <div class="font-semibold text-gray-500 mb-3"><?php dynamic_sidebar( 'about-trust' ); ?></div>
                <div class="text-4xl font-light mb-5"><span class="font-semibold"><?php dynamic_sidebar( 'about-trust-title' ); ?></span></div>
                <div class="bg-gray-300 h-px w-40"></div>
                <div class="text-center my-5 w-5/6 md:w-2/3">
                    <?php dynamic_sidebar( 'about-trust-content' ); ?>
                </div>
                <div class="grid md:grid-cols-3 w-full my-8">
                    <div class="grid justify-items-center mx-3 my-5">
                        <img class="w-20" src="<?php echo get_template_directory_uri() ?>/assets/img/leading.png" alt="img">
                        <div class="text-2xl mt-7 mb-4"><?php dynamic_sidebar( 'about-benifit-1-title' ); ?></div>
                        <div class="text-center">
                            <?php dynamic_sidebar( 'about-benifit-1-content' ); ?>
                        </div>
                    </div>
                    <div class="grid justify-items-center mx-3 my-5">
                        <img class="w-20" src="<?php echo get_template_directory_uri() ?>/assets/img/carefull.png" alt="img">
                        <div class="text-2xl mt-7 mb-4"><?php dynamic_sidebar( 'about-benifit-2-title' ); ?></div>
                        <div class="text-center">
                            <?php dynamic_sidebar( 'about-benifit-2-content' ); ?>
                        </div>
                    </div>
                    <div class="grid justify-items-center mx-3 my-5">
                        <img class="w-20" src="<?php echo get_template_directory_uri() ?>/assets/img/treatment.png" alt="img">
                        <div class="text-2xl mt-7 mb-4"><?php dynamic_sidebar( 'about-benifit-3-title' ); ?></div>
                        <div class="text-center">
                            <?php dynamic_sidebar( 'about-benifit-3-content' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full bg-blue-500 px-12 lg:px-28 py-14">
            <div class="text-4xl text-white mb-4">Contact Us Right Now!
                <span class="font-bold"><?php dynamic_sidebar( 'about-contact-title' ); ?></span>
            </div>
            <div class="text-white"><?php dynamic_sidebar( 'about-contact-content' ); ?></div>
        </div>
        <div class="w-full px-12 lg:px-28 py-14">
            <div class="md:flex mb-5 grid">
                <div class="w-max flex-none mr-10">
                    <div class="font-semibold text-gray-500 mb-3"><?php dynamic_sidebar( 'about-spesialists' ); ?></div>
                    <div class="text-4xl font-light mb-5">
                        <span class="font-semibold">
                            <?php dynamic_sidebar( 'about-spesialists-title' ); ?>
                        </span>
                    </div>
                </div>
                <div>
                    <?php dynamic_sidebar( 'about-spesialists-content' ); ?>
                </div>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 gap-5">
                <div class="relative overflow-hidden w-full h-96 mb-5">
                    <img
                        class="rounded-lg object-cover w-full h-full" 
                        src="<?php echo get_template_directory_uri() ?>/assets/img/profile.jpg" 
                        alt="img"
                    >
                    <div class="absolute z-50 text-white bottom-0 right-0 w-full h-full grid rounded-lg
                                place-content-center opacity-0 hover:opacity-100 about__bg-opacity duration-500">
                        <div class="font-bold text-2xl text-center">Le Hoang</div>
                        <div class="text-center">Product Owner</div>
                    </div>
                </div>

                <div class="relative overflow-hidden w-full h-96 mb-5">
                    <img
                        class="rounded-lg object-cover w-full h-full" 
                        src="<?php echo get_template_directory_uri() ?>/assets/img/minhquan.jpg" 
                        alt="img"
                    >
                    <div class="absolute z-50 text-white bottom-0 right-0 w-full h-full grid rounded-lg
                                place-content-center opacity-0 hover:opacity-100 about__bg-opacity duration-500">
                        <div class="font-bold text-2xl text-center">Minh Quan</div>
                        <div class="text-center">Scrum Master</div>
                    </div>
                </div>

                <div class="relative overflow-hidden w-full h-96 mb-5">
                    <img 
                        class="rounded-lg object-cover w-full h-full" 
                        src="<?php echo get_template_directory_uri() ?>/assets/img/vanphuong.png" 
                        alt="img"
                    >
                    <div class="absolute z-50 text-white bottom-0 right-0 w-full h-full grid rounded-lg
                                place-content-center opacity-0 hover:opacity-100 about__bg-opacity duration-500">
                        <div class="font-bold text-2xl text-center">Van Phuong</div>
                        <div class="text-center">Dev Team</div>
                    </div>
                </div>

                <div class="relative overflow-hidden w-full h-96 mb-5">
                    <img 
                        class="rounded-lg object-cover w-full h-full"
                        src="<?php echo get_template_directory_uri() ?>/assets/img/khoa.jpg"
                        alt="img"
                    >
                    <div class="absolute z-50 text-white bottom-0 right-0 w-full h-full grid rounded-lg
                                place-content-center opacity-0 hover:opacity-100 about__bg-opacity duration-500">
                        <div class="font-bold text-2xl text-center">Khoa Nguyen</div>
                        <div class="text-center">Dev Team</div>
                    </div>
                </div>

                <div class="relative overflow-hidden w-full h-96 mb-5">
                    <img 
                        class="rounded-lg object-cover w-full h-full" 
                        src="<?php echo get_template_directory_uri() ?>/assets/img/huybao.jpg" 
                        alt="img"
                    >
                    <div class="absolute z-50 text-white bottom-0 right-0 w-full h-full grid rounded-lg
                                place-content-center opacity-0 hover:opacity-100 about__bg-opacity duration-500">
                        <div class="font-bold text-2xl text-center">Huy Bao</div>
                        <div class="text-center">Dev Team</div>
                    </div>
                </div>

            </div>
        </div>

        <?php endwhile;
    endif;
?>

<?php
get_footer();