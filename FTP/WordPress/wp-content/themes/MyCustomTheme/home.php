<?php
/**
 *
 * @package myCustomTheme
 */
?>


<?php get_header();

if ( have_posts() ) : ?>
    <div class="main-content"
	<h3>home.php</h3>

	<?php while ( have_posts() ) : the_post(); ?>
		<article class="post">
			<h2><a href="<?php the_permalink();?>"><?php the_title()?></a></h2>
			<div class="author">Written By <?php the_author_posts_link();?> on <?php the_date()?></div>
			<div class="content"><?php the_content() ?></div>
			<div class="category"><?php the_category();?></div>
			<?php the_post_thumbnail(); ?>
		</article>
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

get_footer()?>