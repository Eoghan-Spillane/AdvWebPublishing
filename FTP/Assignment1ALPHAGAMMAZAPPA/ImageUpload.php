
<body>
    <?php
    // Function to find file extension of provided filename
    function findexts ($filename){
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        return $ext;
    }

    $username = $_POST['caption'];

    if($username === null){
        echo "<h1>User Not Created:</h1>";
        echo "<p>Please Enter a Valid Name</p>";
        echo "<a href='http://webdevcit.com/2020/Sem1/R00175214/Assignment1ALPHAGAMMAZAPPA/newUser.php'><button>Enter A Username</button></a>";
        exit();
    }

    //Get data about file
    $tmp_name = $_FILES['uploadfile']['tmp_name'];
    $originalname = $_FILES['uploadfile']['name'];

    // Get the file extension of the original file name
    $fileExtension = findexts($originalname);

    // Create new name for file (including original extension)
    $newname = md5($originalname).".".$fileExtension;

    $currdir =  dirname(__FILE__);
    $url = "http://webdevcit.com/2020/Sem1/R00175214/Assignment1ALPHAGAMMAZAPPA/Images/".$newname;

    // Move the file to the specified path.
    $success = move_uploaded_file($tmp_name, $currdir."/Images/".$newname);

    // If the upload was successful display the contents.
    if ($newname == "d41d8cd98f00b204e9800998ecf8427e.") {
        echo "<h1>User Created</h1>";
//        echo "<div id = 'outer'><img src = $url width='5%'>";
        echo "<br>Username: $username";
    }
    else {
        echo "<h1>User Created</h1>";
        echo "<div id = 'outer'><img src = $url width='5%'>";
        echo "<br>Username: $username";
    }


    //Storing
    $db = mysqli_connect("127.0.0.1", "R00175214_db", "TookWheelArms");

    if (!$db) {
        echo "Sorry! Can't connect to database";
        exit();
    }

    $charset_set = mysqli_set_charset($db, 'utf8');

    if (!$charset_set) {
        echo "Sorry! Can't set character set";
        exit();
    }

    if (!mysqli_select_db($db, "R00175214_db")) {
        echo "Sorry! Can't select database";
        exit();
    }

    if ($newname == "d41d8cd98f00b204e9800998ecf8427e."){
        $result = mysqli_query($db, "INSERT into Users (name, avatar, id) Values('$username', null, null)");
    }else{
        $result = mysqli_query($db, "INSERT into Users (name, avatar, id) Values('$username', '$url', null)");
    }



    if ($db->query($result) === TRUE) {
        echo "New record created successfully";
    }

    ?>

    <footer><button onclick="location.href='http://webdevcit.com/2020/Sem1/R00175214/Assignment1ALPHAGAMMAZAPPA/Homepage.html'" type="button">Return to Homepage</button></footer>
</body>