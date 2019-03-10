<?php /* Template Name: Full width */ get_header(); ?>


<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        the_title();
        the_content();

	endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'emp_wpst' );
endif;
?>

<?php get_footer(); ?>