<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Longform
 * @since Longform 1.0
 */

global $longform_article_width;
global $iterator_home;
	$iterator_home ++;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($longform_article_width); ?>>
	<header class="entry-header row">
		<?php
			home_print_title();
			home_print_thumb();
/*
			if ($iterator_home % 2 == 0){
				home_print_thumb();
				home_print_title();
			} else {
				home_print_title();
				home_print_thumb();
			}
*/
		?>
	</header><!-- .entry-header -->
	
</article><!-- #post-## -->
