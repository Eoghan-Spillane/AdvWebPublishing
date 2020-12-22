<?php
/**
 *
 * @package myCustomTheme
 */
?>


<?php get_header();

if ( have_posts() ) : ?>

	<p>front-page.php</p>

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

$baseurl = "https://www.flickr.com/services/rest/";
$method = "flickr.photos.search";
$key = "0256e29dbce467ebf365f651052b2fab";
$request = "$baseurl?api_key=$key&method=$method&per_page=10&tags=dog,cat&tag_mode=all";
$xml = simplexml_load_file ($request);

foreach ($xml->photos->photo as $photo)
{
	echo "<a href = \"https://www.flickr.com/photos/";
	echo "{$photo['owner']}/{$photo['id']}\">";
	echo "<img src =\"https://farm{$photo['farm']}.static.flickr.com/";
	echo "{$photo['server']}/";
	echo "{$photo['id']}_{$photo['secret']}_s.jpg\">";
	echo "</a>";
}

get_footer()?>
