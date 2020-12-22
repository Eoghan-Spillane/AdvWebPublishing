<?php
/**
 *
 * @package myCustomTheme
 */
?>


<?php get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<p>page.php</p>
		<article class="post">
<!--			<h2><a href="--><?php //the_permalink();?><!--">--><?php //the_title()?><!--</a></h2>-->
			<div class="content"><?php the_content() ?></div>
			<div class="category"><?php the_category();?></div>
			<?php the_post_thumbnail();?>

			<?php $args = [ 'child_of' => $post->ID, 'title_li' => '', ]; wp_list_pages( $args ); ?>
		</article>
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

get_footer()?>