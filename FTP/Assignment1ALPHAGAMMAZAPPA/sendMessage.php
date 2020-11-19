<?php
/* connect to database */
$user = $_POST['userID'];
$message = $_POST['message'];

//$user = "1";
//$message = "Debug Test";

$db = mysqli_connect ("127.0.0.1", "R00175214_db", "TookWheelArms");

//Checks if the user has been chosen
if ($user != 1){
    echo "User Exists";
}else{
    echo "<script type='text/javascript'>alert('No User Selected');</script>";
    echo "No User";
    exit();
}

if (isset($message)){
    echo "Message Exists";
}else{
    echo "No Message";
}


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

$query = "Insert into blogcomments (text, userID, time, id) Values ('${message}', '${user}', now(), null)";
echo $query;

$result = mysqli_query($db, $query);

if($result){
    echo "Record Added";
}else{
    echo "Failed Insert";
}