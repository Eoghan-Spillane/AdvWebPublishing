<?php

	/* connect to database */

	$term = $_GET['search_term'];
	$db = mysqli_connect ("127.0.0.1", "c1demo_user", "demo_user_password");

	if (!$db) {
		echo "Sorry! Can't connect to database";
		exit();
	}

	$charset_set = mysqli_set_charset ($db, 'utf8');

	if (!$charset_set) {
		echo "Sorry! Can't set character set";
		exit();
	}

	if (!mysqli_select_db ($db, "c1demo")) {
		echo "Sorry! Can't select database";
		exit();
	}

	$safeTerm = mysqli_real_escape_string($db, $term);

	/* Send the SQL query to the database and store the result */
	$result = mysqli_query ($db, "SELECT * FROM wp_posts WHERE post_content LIKE '%$safeTerm%' OR post_title LIKE '%$safeTerm%';");

	/* loop through each row of the resuts */
	while ($row = mysqli_fetch_array ($result)) {
		/* get the title from the current row */
		echo "<div class = 'result'>{$row['post_title']}</div>\n";
	}
?>

