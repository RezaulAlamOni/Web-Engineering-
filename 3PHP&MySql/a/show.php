<?php require_once('db.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
    <div class="container">

            <?php
            if (isset($_GET['view']))
            {
                include "db.php";

                $sql    = "SELECT * FROM booking";
                $result = mysqli_query($con, $sql);
                if (!$result)
                {
                    die("Query Failed...!" . mysqli_error($result));
                }
                else
                {
                    ?>			<h2 class="text-center">Booking Info List</h2>
                    <table class="table" cellpadding="5" cellspacing="1" border="1px">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Room Size</th>
                            <th>Valcony</th>
                            <th>Breakfast</th>
                            <th>Launch</th>
                            <th>Dinner</th>
                            <th>Confirm Code</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td>0<?php echo $row['phone']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td><?php echo $row['velcony']; ?></td>
                                <td><?php echo $row['breakfast']; ?></td>
                                <td><?php echo $row['launch']; ?></td>
                                <td><?php echo $row['dinner']; ?></td>
                                <td><?php echo $row['code']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>				</table><br><br>
                    <a class="btn btn-info" href="index.php">Home</a>
                    <?php
                }
            }
            ?>
    </div>
</body>
</html>

