<?php
/**
 * Adds Frontpage_Widget widget.
 */
class Frontpage_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'frontpage_widget', // Base ID
			__('Frontpage Widget', 'nyomegadesigns'), // Name
			array( 'description' => __( 'Create frontpage widgets', 'nyomegadesigns' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		$icon = apply_filters( 'widget_icon', $instance['icon'] );
		$desc = apply_filters( 'widget_desc', $instance['desc'] );
		$link = apply_filters( 'widget_link', $instance['link'] );
                $button_class = apply_filters( 'button_class', $instance['button_class'] );
                
		$bdrcolor = apply_filters( 'widget_bdrcolor', $instance['bdrcolor'] );
		
		echo '<div class="fpwidget-container fll ctext" style="border-top: 8px solid #'. $bdrcolor .';">';
		echo '<div class="fpwidget-icon-container"><img src="' . $icon . '" /></div>';
		echo $args['before_widget'];
		if ( ! empty( $title ) ){
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		if ( ! empty( $desc ) ){
			echo '<p class="fpwidget-content">' . $desc . '</p>';
		}
		echo $args['after_widget'];
		if ( ! empty( $link ) ){
			echo '<div class="know-more-link-container"><a href="' . $link . '" class="know-more-link ' . $button_class .'">' . __('Know more', 'nyomegadesigns') . ' &raquo;</a></div>';
		}
		echo '</div>';
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		
		// validate title
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'nyomegadesigns' );
		}
		
		// validate icon src
		if ( isset( $instance['icon'] ) ){
			$icon = $instance[ 'icon' ];
		}else{
			$icon = __( '' );
		}
		
		// validate description
		if ( isset( $instance['desc'] ) ){
			$desc = $instance['desc'];
		}else{
			$desc = __( 'No description.', 'nyomegadesigns' );
		}
		
		// validate link url
		if ( isset( $instance['link'] ) ){
			$link = $instance['link'];
		}else{
			$link = __( '#' );
		}
                
                // validate button class
		if ( isset( $instance['button_class'] ) ){
			$button_class = $instance['button_class'];
		}else{
			$button_class = __( '' );
		}
		
		// validate brdcolor
		if ( isset( $instance['bdrcolor'] ) ){
			$bdrcolor = $instance['bdrcolor'];
		}else{
			$bdrcolor = __( '' );
		}
		
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'icon' ); ?>"><?php _e( 'Icon src:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>" type="text" value="<?php echo esc_attr( $icon ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'desc' ); ?>"><?php _e( 'Description:' ); ?></label>
		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id( 'desc' ); ?>" name="<?php echo $this->get_field_name( 'desc' ); ?>"><?php echo esc_attr( $desc ); ?></textarea>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link URL:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
		</p>
                <p>
		<label for="<?php echo $this->get_field_id( 'button_class' ); ?>"><?php _e( 'Button class:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'button_class' ); ?>" name="<?php echo $this->get_field_name( 'button_class' ); ?>" type="text" value="<?php echo esc_attr( $button_class ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'bdrcolor' ); ?>"><?php _e( 'Border top color (i.e. 330044):' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'bdrcolor' ); ?>" name="<?php echo $this->get_field_name( 'bdrcolor' ); ?>" type="text" value="<?php echo esc_attr( $bdrcolor ); ?>" />
		</p>
		<?php 
	}
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['icon'] = ( ! empty ( $new_instance['icon'] ) ) ? strip_tags( $new_instance['icon'] ) : '';
		$instance['desc'] = ( ! empty( $new_instance['desc'] ) ) ? strip_tags( $new_instance['desc'] ) : '';
		$instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
                $instance['button_class'] = ( ! empty( $new_instance['button_class'] ) ) ? strip_tags( $new_instance['button_class'] ) : '';
		$instance['bdrcolor'] = ( ! empty( $new_instance['bdrcolor'] ) ) ? strip_tags( $new_instance['bdrcolor'] ) : '';
		return $instance;
	}

} // class Frontpage_Widget