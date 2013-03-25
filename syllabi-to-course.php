<?php
/*
Plugin Name: Convert syllabi to course CPTs
Description: A bulk conversion utility for specific post types.
License: GPL2
*/ 

add_action('init', 'kiss_syllabus_to_course');

function kiss_syllabus_to_course() { 
$query = new WP_Query( array( 'post_type' => 'syllabus') );
 
if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();
		$id = get_the_ID();
		$my_post = array();
		$my_post['ID'] = $id;
		$my_post['post_type'] = 'course';

// Update the post into the database
		wp_update_post( $my_post );	
		
	endwhile; wp_reset_postdata();
	<!-- show pagination here -->
<?php else : ?>
	<!-- show 404 error here -->
<?php endif;

}