<!DOCTYPE html>
<html>
    <head>
        <title>New User</title>
        <style>
            html{
                background: #1d1c1a;
            }

            p{
                color: #e4d3b7;
            }

            h1{
                color: #e4d3b7;
            }

            h3{
                color: #e4d3b7
            }

            body{
                margin: auto;
                width: 60%;
                padding: 10px;
                align-content: center;
                background: #393833;

            }

            title{
                margin: auto;
                width: 10%;
            }

            /*div{*/
            /*    display: block;*/
            /*    margin-left: auto;*/
            /*    margin-right: auto;*/
            /*    width: 100%;*/
            /*}*/

            #comments{
                align-self: center;
                width: 100%;
                height: 400px;
                border: 1px solid black;
                /*overflow: scroll;*/
                overflow: auto;
            }

            .result {
                font-family: helvetica, sans-serif;
                background: darkslategrey;
                border-top: 1px solid black;
                padding: 5px;
            }
        </style>
    </head>
    <body>

        <header>
            <h1>Create New User</h1>
            <hr>
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
            <hr>
            <h3>Eoghan Spillane (R00175214)</h3>
        </footer>

    </body>
</html>