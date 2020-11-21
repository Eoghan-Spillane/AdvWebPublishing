<?php /** @noinspection ALL */

header("Content-type: text/xml");

header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');


/* connect to database */
$id = $_GET['commentId'];

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
$result = mysqli_query($db, "Select U.name, U.avatar, b.text, b.time from Users U, blogcomments b where U.id = b.userID order by b.time desc limit 20;");
echo "<results>";
while ($row = mysqli_fetch_array ($result)) {
//    if (isset($row['avatar'])){
        echo "<post>";
//            echo "<avatar> <![CDATA[{$row['avatar']}]]></avatar>\n";
            echo "<name> <![CDATA[{$row['name']}]]></name>\n";
            echo "<time> <![CDATA[{$row['time']}]]></time>\n";
            echo "<text> <![CDATA[{$row['text']}]]></text>\n";
        echo "</post>";
//    }else{
//        echo "<post>";
//        echo "<name> <![CDATA[{$row['name']}]]></name>\n";
//        echo "<time> <![CDATA[{$row['time']}]]></time>\n";
//        echo "<text> <![CDATA[{$row['text']}]]></text>\n";
//        echo "</post>";
//    }
}
echo "</results>";

?>