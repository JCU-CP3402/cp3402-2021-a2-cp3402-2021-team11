<?php
/*
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package CMSAssignmentTheme
 * 
 */

class Button_Widget extends WP_Widget {
    public function __construct() {
        $widget_ops = [
            'classname'=>'button-widget',
            'description'=> 'Button Widget'
        ];
        parent::__construct( 'button_widget', 'Button widget', $widget_ops );
    }

    public function form ( $instance ) {
        if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = __( '', '' );
		}

        if ( isset( $instance['link'] ) ) {
            $link = $instance['link'];
        } else {
			$link = __( '', '' );
		}

		?>
		<p>
			<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:', '' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>"/>
		</p>
        <p>
			<label for="<?php echo $this->get_field_name( 'link' ); ?>"><?php _e( 'Link:', '' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>"
			       name="<?php echo $this->get_field_name( 'link' ); ?>" type="text"
			       value="<?php echo esc_attr( $link ); ?>"/>
		</p>
		<?php
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $link = apply_filters( 'widget_link', $instance['link'] );

        echo $args['before_widget'];
        ?>
        <a class="w-max px-10 py-5 rounded-lg bg-blue-500 text-white font-semibold" href="<?php print $link ?>">
            <?php print $title ?>
        </a>
        <?php
        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {
		$instance          = [];
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';

		return $instance;
	}
}

add_action( 'widgets_init', function() {
    register_widget( 'Button_Widget' );
} );


class Text_Widget extends WP_Widget {
    public function __construct() {
        $widget_ops = [
            'classname'=>'text-widget',
            'description'=> 'Text Widget'
        ];
        parent::__construct( 'text_widget', 'Text widget', $widget_ops );
    }

    public function form ( $instance ) {
        if ( isset( $instance['text'] ) ) {
			$text = $instance['text'];
		} else {
			$text = __( '', '' );
		}

		?>
		<p>
			<label for="<?php echo $this->get_field_name( 'text' ); ?>"><?php _e( 'Text:', '' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>"
			       name="<?php echo $this->get_field_name( 'text' ); ?>" type="text"
			       value="<?php echo esc_attr( $text ); ?>"/>
		</p>
		<?php
    }

    public function widget( $args, $instance ) {
        extract( $args );
        $text = apply_filters( 'widget_text', $instance['text'] );

        echo $args['before_widget'];
        ?>
            <?php print $text ?>
        <?php
        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {
		$instance          = [];
		$instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';

		return $instance;
	}
}

add_action( 'widgets_init', function() {
    register_widget( 'Text_Widget' );
} );

class Home_Rollover_Widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'image-widget',
      'Image Widget',
      array(
        'description' => 'Image widget'
      )
    );
  }

  public function widget( $args, $instance )
  {
    // basic output just for this example
    echo '<img src="'.esc_url($instance['image_uri']).'" />';
  }

  public function form( $instance )
  {
    // removed the for loop, you can create new instances of the widget instead
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('text'); ?>">Text</label><br />
      <input type="text" name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('text'); ?>" value="<?php echo $instance['text']; ?>" class="widefat" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('image_uri'); ?>">Image</label><br />
      <input type="text" class="img" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php echo $instance['image_uri']; ?>" />
      <input type="button" class="select-img" value="Select Image" />
    </p>
    <?php
  }


} 
// end class

// init the widget
add_action( 'widgets_init', function() {
    return register_widget("Home_Rollover_Widget");
});

// queue up the necessary js
function hrw_enqueue()
{
  wp_enqueue_style('thickbox');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');
  // moved the js to an external file, you may want to change the path
  wp_enqueue_script('hrw', get_template_directory_uri() . '/js/widget.js', null, null, true);
}
add_action('admin_enqueue_scripts', 'hrw_enqueue');