<?php require_once('db.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Collect</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <?php
        if (isset($_POST['submit']))
        {

            $id   = '';
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $category = $_POST['category'];
            $valcony = $_POST['valcony'];

            (isset($_POST['breakfast'])) ? $breakfast = $_POST['breakfast'] : $breakfast = 'no';
            (isset($_POST['launch'])) ? $launch = $_POST['launch'] : $launch = 'no';
            (isset($_POST['dinner'])) ? $dinner = $_POST['dinner'] : $dinner = 'no';

            $code = $_POST['code'];

            $sql =  "INSERT INTO booking ";
            $sql .= "VALUES('$id', '$name', '$address', '$category', '$phone', ";
            $sql .= "'$valcony', '$breakfast', '$launch', '$dinner', '$code')";

            $result = mysqli_query($con , $sql);

            if (!$result)
            {
                die("Query Failed...!" . mysqli_error($result));
            }
            else
            {
                echo "<h3>Info Add Successfully</h3><br><br>
                <a-HTML-prime class='btn btn-success' href='show.php?view=1'>Show Info</a-HTML-prime>
                <a-HTML-prime class='btn btn-info' href='index.php'>Home</a-HTML-prime>";

            }


        }
        else
        {
            ?>		<h1 class="text-center">Welcome to ABC Hotel</h1>
            <h3 class="text-center">Here You Booking Us</h3>
            <form method="POST" action="" border="1" class="from-control">
                <label for="name">Name</label><br>
                <input type="text" name="name" autofocus required><br><br>
                <label for="address">Address</label><br>
                <textarea name="address" cols="25" rows="2"></textarea><br><br>
                <label for="phone">Phone</label><br>
                <input type="tel" name="phone" required><br><br>
                <label for="salary">Room Category</label><br>
                <select name="category" required>
                    <option value="">Choose Category ***</option>
                    <option value="big">Big</option>
                    <option value="mid">Medium</option>
                    <option value="sm">Small</option>
                </select><br><br>
                <label for="valcony">Valcony</label><br>
                Yes<input type="radio" name="valcony" value="yes">
                No<input type="radio" name="valcony" value="no" checked><br><br>
                <label for="food">Food Serve For</label><br>
                <input type="checkbox" name="breakfast" value="yes">
                <label for="morning">Breakfast</label><br>

                <input type="checkbox" name="launch" value="yes">
                <label for="noon">Launch</label><br>

                <input type="checkbox" name="dinner" value="yes">
                <label for="night">Dinner</label><br><br>

                <label for="code">Confirmation Code</label><br>
                <input type="password" name="code" pattern="[0-9]{5}" placeholder="only 5 digit"><br><br>

                <input class="btn btn-success" type="submit" name="submit">
                <input class="btn btn-info" type="reset" name="Reset">
            </form><br><br>

            <a class="btn btn-success" href="show.php?view=1">Show Booking Info</a>
            <?php
        }
        ?>
    </div>
</body>
</html>


