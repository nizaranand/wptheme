<?php get_header(); ?>
<div id="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php remove_filter('the_content', 'wpautop'); ?> 
<?php the_content(); ?>
<?php endwhile; ?>
            
<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
</div><!-- END Main -->		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>