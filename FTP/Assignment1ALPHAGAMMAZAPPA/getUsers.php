<?php

/* connect to database */
$term = $_GET['search_term'];
$db = mysqli_connect ("127.0.0.1", "R00175214_db", "TookWheelArms");
if (!$db) {
    echo "Sorry! Can't connect to database";
    exit();
}

$charset_set = mysqli_set_charset ($db, 'utf8');

if (!$charset_set) {
    echo "Sorry! Can't set character set";
    exit();
}

if (!mysqli_select_db ($db, "R00175214_db")) {
    echo "Sorry! Can't select database";
    exit();
}

$safeTerm = mysqli_real_escape_string($db);

/* Send the SQL query to the database and store the result */
//$result = mysqli_query ($db, "SELECT * FROM blogcomments;");
$result = mysqli_query($db, "Select name, avatar, id from Users;");

/* loop through each row of the resuts */
echo "<select name='Users' id='userDropDown'>";

while ($row = mysqli_fetch_array ($result)) {
    echo "<option value='".$row['id']."'>".$row['name']."</option>";
}

echo "</select>";
?>
