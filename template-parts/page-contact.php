<?php
/**
  *  Template Name: Contact page
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
                        <h1> Send us your thoughts now! </h1>
                    </div>
                    <div class="Form">
                        <form action="./validation.php" method="post">
                            <div class="elem-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
                            </div>
                            <div class="elem-group">
                                <label for="email">Your E-mail</label>
                                <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
                            </div>
                            <div class="elem-group">
                                <label for="department-selection">Choose Concerned Department</label>
                                <select id="department-selection" name="concerned_department" required>
                                    <option value="">Select a Department</option>
                                    <option value="billing">Billing</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="technical support">Technical Support</option>
                                </select>
                            </div>
                            <div class="elem-group">
                                <label for="title">Reason For Contacting Us</label>
                                <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
                            </div>
                            <div class="elem-group">
                                <label for="message">Write your message</label>
                                <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
                            </div>
                            <button type="submit">Send Message</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

        <?php endwhile;
    endif;
?>

<?php
get_footer();