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

            <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center mb-14">
                <img class="w-11/12 shadow-2xl" src="<?php echo get_template_directory_uri() ?>/assets/img/about_us.jpg" alt="image" >
                <div class="justify-self-stretch grid w-full ml-5 grid-flow-row auto-rows-max">
                    <div class="">
                        <?php the_content() ?>
                    </div>
                    <div>
                        <div class="about__psychology-progress">
                            <div class="about__account">
                                <div class="about__title-progress">PSYCHOLOGY</div>
                                <div class="about__percentage-progress">90%</div>
                                <div class="about__account-bar"></div>
                            </div>
                            <div class="about__total-bar"></div>
                        </div>
                        <div class="about__design-progress">
                            <div class="about__account">
                                <div class="about__title-progress">DESIGN</div>
                                <div class="about__percentage-progress">80%</div>
                                <div class="about__account-bar"></div>
                            </div>
                            <div class="about__total-bar"></div>
                        </div>
                        <div class="about__marketing-progress">
                            <div class="about__account">
                                <div class="about__title-progress">MARKETING</div>
                                <div class="about__percentage-progress">70%</div>
                                <div class="about__account-bar"></div>
                            </div>
                            <div class="about__total-bar"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid justify-items-center mb-14">
                <div class="font-semibold text-gray-500 mb-3">WHY PEOPLE TRUST US</div>
                <div class="text-4xl font-light mb-5">People <span class="font-semibold">Trust Us</span></div>
                <div class="bg-gray-300 h-px w-40"></div>
                <div class="text-center my-5 w-5/6 md:w-2/3">While we are working in the community to achieve 
                this we also recognize those individuals and organizations who are “Autism Friendly.” Once per 
                year we nominate and award those who show care and consideration towards the Autism community.</div>
                <div class="grid md:grid-cols-3 w-full my-8">
                    <div class="grid justify-items-center mx-3 my-5">
                        <img class="w-20" src="<?php echo get_template_directory_uri() ?>/assets/img/leading.png" alt="img">
                        <div class="text-2xl mt-7 mb-4">Lifelong Developmental</div>
                        <div class="text-center">Autism is a lifelong developmental condition characterized 
                            by difficulties in social interaction, communication, restricted and repetitive 
                            interests and behaviours, and sensory sensitivities.
                        </div>
                    </div>
                    <div class="grid justify-items-center mx-3 my-5">
                        <img class="w-20" src="<?php echo get_template_directory_uri() ?>/assets/img/carefull.png" alt="img">
                        <div class="text-2xl mt-7 mb-4">Carefull Therapy</div>
                        <div class="text-center">The quality of life for many children and adults can be significantly 
                            improved by an early diagnosis and appropriate evidence-informed treatment.
                        </div>
                    </div>
                    <div class="grid justify-items-center mx-3 my-5">
                        <img class="w-20" src="<?php echo get_template_directory_uri() ?>/assets/img/treatment.png" alt="img">
                        <div class="text-2xl mt-7 mb-4">Best Treatment</div>
                        <div class="text-center">The Autism Support Group advocates for better services and support for those affected by Autism.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full bg-blue-500 px-12 lg:px-28 py-14">
            <div class="text-4xl text-white mb-4">Contact Us Right Now! <span class="font-bold">Andrew Hannay</span></div>
            <div class="text-white">Autism Support Group IT Administrator</div>
        </div>
        <div class="w-full px-12 lg:px-28 py-14">
            <div class="md:flex mb-5 grid">
                <div class="w-max flex-none mr-10">
                    <div class="font-semibold text-gray-500 mb-3">WHY PEOPLE TRUST US</div>
                    <div class="text-4xl font-light mb-5">Meet Our <span class="font-semibold">Spesialists</span></div>
                </div>
                <div>
                Members are welcome to borrow from our library of books, papers, CDs & videos,
                 about Autism and related disorders, from reputable sources such as Tony Attwood, 
                 Wendy Lawson and many others.
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