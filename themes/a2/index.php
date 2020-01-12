<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Assignment2
 */


get_header();
?>
<div class="container">
	<div class="main">
    	<?php if(have_posts()) : ?> 
        	<?php while(have_posts()): the_post(); ?>
    	<article class="post">
        	<h3>
        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        	</h3>
        	<div class="meta">
        	Created By <?php the_author(); ?> on<?php the_time('F j, Y g:i a'); ?>
        	</div>
			<?php if(has_post_thumbnail()) : ?>
    			<div class="post-thumbnail">
        			<?php the_post_thumbnail(); ?>
    			</div>
			<?php endif; ?>
        	<?php the_content(); ?>
    	</article>
	<br>
	<a class="button" href="<?php the_permalink(); ?>"> Read More </a> 
	<?php endwhile; ?> 
    	<?php else : ?>
        	<?php echo wpautop('Sorry, No posts were found'); ?>
    	<?php endif; ?> 

	</div>
<div class="sidebar">
    <?php if(is_active_sidebar('sidebar')) : ?>
    <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</div>  

	<div class="clr"></div>
</div>
<?php get_footer();  
