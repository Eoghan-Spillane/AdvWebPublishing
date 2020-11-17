<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

    <Style>
        body {

        }
    </style>

<?php
    // Function to find file extension of provided filename
    function findexts ($filename){
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        return $ext;
    }

    $caption = $_POST['caption'];

    //Get data about file
    $tmp_name = $_FILES['uploadfile']['tmp_name'];
    $originalname = $_FILES['uploadfile']['name'];

    // Get the file extension of the original file name
    $fileExtension = findexts($originalname);

    // Create new name for file (including original extension)
    $newname = md5($originalname).".".$fileExtension;

    // Find the directory of this script
    $currdir =  dirname(__FILE__);
    echo $currdir;

    // create the full path name for the new file (including any directory names we may use)
    $fullpath = $currdir."/Files/".$newname;

    // Move the file to the specified path.
    $success = move_uploaded_file($tmp_name, $currdir."/Files/".$newname);

    // If the upload was successful display the contents.
    if ($success)
    {
        echo "<h1>File uploaded</h1>";
        echo "<div id = 'outer'><img src = \"Files/$newname\">";
        echo "<br>CAPTION: $caption";
    }
    else
    {
        echo "<h1> Error. Try again!</h1>";
    }
?>