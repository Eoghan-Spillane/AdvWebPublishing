<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

    <header>
        <h1>Live Blog Chat</h1>
        <button onclick="location.href='http://webdevcit.com/2020/Sem1/R00175214/Assignment1ALPHAGAMMAZAPPA/newUser.php'" type="button">Create New User</button>

        <?php
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

        $result = mysqli_query ($db, "SELECT * FROM Users;");



        echo "<select name='Users'>";
        while ($row = mysqli_fetch_array ($result)) {
            echo "<option value='".$row['name']."'>".$row['name']."</option>";
        }
        echo "</select>";

        ?>
    </header>


    <footer>
        <h3>Eoghan Spillane (R00175214)</h3>
    </footer>

    </body>
</html>