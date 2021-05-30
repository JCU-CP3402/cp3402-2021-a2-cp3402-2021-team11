<?php

function custom_sidebar($id) {
    register_sidebar(
        array(
            'name'          => esc_html__( $id, 'cmsassignmenttheme' ),
            'id'            => $id,
            'description'   => esc_html__( 'Add widgets here.', 'cmsassignmenttheme' ),
            'before_title'		=> '',
            'after_title' 		=> '',
            'before_widget'		=> '<div id="%1$s">',
            'after_widget'    	=> '</div>'
        )
    ); 
}

custom_sidebar('home-bg-1');
custom_sidebar('home-text-1');
custom_sidebar('home-text-2');
custom_sidebar('home-text-3');
custom_sidebar('home-button-1');


//---------------------------------------------------------------------------------------------

custom_sidebar('home-service-1-title');
custom_sidebar('home-service-1-content');
custom_sidebar('home-service-2-title');
custom_sidebar('home-service-2-content');
custom_sidebar('home-service-3-title');
custom_sidebar('home-service-3-content');

//---------------------------------------------------------------------------------------------

custom_sidebar('home-image-1');
custom_sidebar('home-whoarewe');
custom_sidebar('home-whoarewe-title');
custom_sidebar('home-whoarewe-content');
custom_sidebar('home-whoarewe-button');

//---------------------------------------------------------------------------------------------

custom_sidebar('home-experience-bg');
custom_sidebar('home-experience-number-1');
custom_sidebar('home-experience-text-1');
custom_sidebar('home-experience-number-2');
custom_sidebar('home-experience-text-2');
custom_sidebar('home-experience-number-3');
custom_sidebar('home-experience-text-3');
custom_sidebar('home-experience-number-4');
custom_sidebar('home-experience-text-4');


//====================================================

custom_sidebar('about-image-1');
custom_sidebar('about-feature-1');
custom_sidebar('about-feature-2');
custom_sidebar('about-feature-3');


// --------------------------------------------
custom_sidebar('about-trust');
custom_sidebar('about-trust-title');
custom_sidebar('about-trust-content');

// ------------------------------------------

custom_sidebar('about-benifit-1-title');
custom_sidebar('about-benifit-1-content');
custom_sidebar('about-benifit-2-title');
custom_sidebar('about-benifit-2-content');
custom_sidebar('about-benifit-3-title');
custom_sidebar('about-benifit-3-content');

// ----------------------------------------

custom_sidebar('about-contact-title');
custom_sidebar('about-contact-content');

// ----------------------------------------

custom_sidebar('about-spesialists');
custom_sidebar('about-spesialists-title');
custom_sidebar('about-spesialists-content');

