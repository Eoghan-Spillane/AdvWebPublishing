<?php

/* Provide meta data (via headers) to tell browsers that this is XML not HTML
and to not cache this page */

header("Content-type: text/xml");

header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
header('Cache-Control: no-store, no-cache, must-revalidate'); 
header('Cache-Control: post-check=0, pre-check=0', FALSE); 
header('Pragma: no-cache');


/* Get the search term */

$term = $_GET['search_term'];

/* connect to database */


$db = mysqli_connect ("127.0.0.1", "c1demo_user", "demo_user_password");

if (!$db)
{
	echo "Sorry! Can't connect to database";
	exit();
}

$charset_set = mysqli_set_charset ($db, 'utf8');

if (!$charset_set)
{
	echo "Sorry! Can't set character set";
	exit();
}


$selected = mysqli_select_db ($db, "c1demo");

if (!$selected)
{
	echo "Sorry! Can't select database";
	exit();

}


/*  Write out the root tag  */

echo "<results>";


/* make the search term safe to use in a SQL query */

$safeTerm = mysqli_real_escape_string($db, $term);




/* Send the SQL query to the database and store the result */

/* We join the 2 databases so we have the post and user name */

$result = mysqli_query ($db, "SELECT * FROM wp_posts, wp_users WHERE wp_posts.post_author = wp_users.ID AND  (post_content LIKE '%$safeTerm%' OR post_title LIKE '%$safeTerm%');");

/* loop through each row of the resuts */
while ($row = mysqli_fetch_array ($result))
{

/* open a tag for each post */

echo "<post>";

/* get the title from the current row */

echo "<title><![CDATA[{$row['post_title']}]]></title>\n";

/* get the author name from the current row */

echo "<author><![CDATA[{$row['display_name']}]]></author>\n";

/* get the author post content from the current row */

echo "<content><![CDATA[{$row['post_content']}]]></content>\n";

/* Close the containing tag */

echo "</post>";

}


/* close the root tag */

echo "</results>";


?>

