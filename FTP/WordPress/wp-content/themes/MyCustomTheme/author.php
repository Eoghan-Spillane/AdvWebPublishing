<?php
/**
 *
 * @package myCustomTheme
 */
?>


<?php get_header(); ?>

<?php if ( have_posts() ) : ?>


    <div class="author-name" style="border-bottom: 1px solid #292727; font-family: 'Langar', cursive; margin-left: auto; margin-right: auto; align-content: center; text-align: center">
        <h3><?php the_author()?></h3>
        <img src="<?php the_author_meta('description');?>" width="20%">
    </div>

	<?php while ( have_posts() ) : the_post(); ?>

		<article class="post">
			<h2><a href="<?php the_permalink();?>"><?php the_title()?></a> on <?php the_date()?></h2>
			<div class="content"><?php the_content() ?></div>
			<div class="category"><?php the_category();?></div>
			<?php the_post_thumbnail(); ?>
		</article>
	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

get_footer()?>