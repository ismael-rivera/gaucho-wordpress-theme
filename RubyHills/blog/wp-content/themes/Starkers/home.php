<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<?php get_header('custom'); ?>
<div id="content_wrapper">
		<div id="content">
        	<div id="blogRight">
				<?php
                /* Run the loop to output the posts.
                 * If you want to overload this in a child theme then include a file
                 * called loop-index.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'index' );?>
            </div>    
            <div id="blogLeft">
                <?php get_sidebar(); ?>
            </div>        
        </div>
</div>
<?php   
get_footer('custom');
?>