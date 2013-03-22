<?php
/*
Plugin Name: Convert syllabi to course CPTs
Description: A bulk conversion utility for specific post types.
License: GPL2
*/ 
 
$query = new WP_Query( array( 'post_type' => 'syllabus') );
 
if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();
	
	endwhile; wp_reset_postdata();
	<!-- show pagination here -->
<?php else : ?>
	<!-- show 404 error here -->
<?php endif; ?>
?>