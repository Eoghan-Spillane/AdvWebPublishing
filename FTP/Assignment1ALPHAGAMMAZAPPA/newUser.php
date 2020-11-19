<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <header>
            <h1>Create New User</h1>
            <form action = "ImageUpload.php" enctype = "multipart/form-data" method = "post">
                <p>User Avatar: <input type = "file" name = "uploadfile">
                <p>User Name: <input type = "text" name = "caption">
                <p><input type = submit>
            </form>


<!--            <button onclick="location.href='http://webdevcit.com/2020/Sem1/R00175214/Assignment1ALPHAGAMMAZAPPA/newUser.php'" type="button">Create New User</button>-->
        </header>

<!--            <form action="newUser.php" method="post">-->
<!--                Name: <input type="text" name="Username"><br>-->
<!--                E-mail: <input type="text" name="email"><br>-->
<!--                <input type="submit">-->
<!--            </form>-->

            <?php
//                $db = mysqli_connect("127.0.0.1", "R00175214_db", "TookWheelArms");
//
//                if (!$db) {
//                    echo "Sorry! Can't connect to database";
//                    exit();
//                }
//
//                $charset_set = mysqli_set_charset($db, 'utf8');
//
//                if (!$charset_set) {
//                    echo "Sorry! Can't set character set";
//                    exit();
//                }
//
//                if (!mysqli_select_db($db, "R00175214_db")) {
//                    echo "Sorry! Can't select database";
//                    exit();
//                }
//
//                $result = mysqli_query($db, "SELECT * FROM Users;");

            ?>
        
        <footer>
            <h3>Eoghan Spillane (R00175214)</h3>
        </footer>

    </body>
</html>