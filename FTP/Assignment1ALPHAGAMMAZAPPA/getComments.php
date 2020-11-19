<?php /** @noinspection ALL */

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
    $result = mysqli_query($db, "Select U.name, U.avatar, b.text, b.time from Users U, blogcomments b where U.id = b.userID order by b.time desc limit 20;");

    $counter = 0;
    /* loop through each row of the resuts */
    while ($row = mysqli_fetch_array ($result) and counter < 20) {
        /* get the title from the current row */
        //echo "<div class = 'result'>{$row['text']}</div>\n";

        if (isset($row['avatar'])){
            echo "
            <div class = 'result'>
            <p><img src='{$row['avatar']}' width='5%'> {$row['name']} says:</p>
            <p>{$row['time']} - {$row['text']}</p>
            </div>\n
        ";
        }else{
            echo "<div class = 'result'><p>{$row['name']} says:</p><p>{$row['time']} - {$row['text']}</p></div>\n";
        }


    }
?>

