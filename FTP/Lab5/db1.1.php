<meta http-equiv="content-type" content="text-html; charset=ISO-8859-1">
<style>

.post {

border: 1px solid black; 

width: 500px; 

margin: 50px; 

padding: 30px;
}

.sysdev {background: black; color: white;
font-family: helvetica, sans-serif;}

</style>


<?php
/* 

Media Interactivity | Persistence | Database Lab 1



Database Details

host: 127.0.0.1
user: c1demo_user
password: demo_user_password
database: c1demo

Database can be viewed at: https://webdevcit.com/adminer.php


Activities


1 display title of each post (post_title field in the wp_posts table)
2 display title of each post in reverse chronological order (post_date_gmt)
3 display the title and author of each post (using wp_posts and wp_users tables) 
4 Add HTML and CSS to (3) to display each post (include the post content itself - i.e. post_content) in reverse chronological order.
5 display the title, author and content of each post in the "System Development 2" Category. To achieve you can use wp_users [a table of users] ,wp_posts [table with poist content and title],wp_categories [table of category names], wp_post2cat [a table mapping posts to categories].

*/

/*c1demo_user
demo_user_password
*/

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


$result = mysqli_query ($db, "SELECT * FROM wp_posts;");


while ($row = mysqli_fetch_array ($result)) {
    echo "<p>{$row['post_title']}\n";
}



?>