<?php require_once('db.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center text-success">Employee Data Management System</h1>
        <h2 class="text-center text-info">Employee Data Input</h2><br><br>

        <div class="from-control">
            <form class="form-horizontal" action="index.php" method="post">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">Name :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">Address :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter Address" name="address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">Email :</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">Phone :</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" placeholder="Enter Phone number" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">Salary :</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Enter salary" name="salary">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-4">
                        <button type="submit" class="btn btn-info" name="submit">Submit</button>
                    </div>
                    <div class="col-sm-4">
                        <a href="show.php" class="btn btn-primary">HOME</a>
                    </div>
                </div>
            </form>
            <?php

                if (isset($_POST['submit'])){
                    $name       = $_POST['name'];
                    $address    = $_POST['address'];
                    $email      = $_POST['email'];
                    $phone      = $_POST['phone'];
                    $salary     = $_POST['salary'];

                    if (!empty($name) && !empty($address) && !empty($email) && !empty($phone) && !empty($salary)){

                        $sql = "INSERT into employees ";
                        $sql .= "VALUES('','$name','$address','$email','$phone','$salary')";
                        $result = mysqli_query($con,$sql);

                        if ($result){
                            echo "<h3 class='text-center text-success'>Information Stored !!! </h3>";
                        }
                    }else{
                        echo "<h3 class='text-center text-danger'>Contained field can not be empty !!!! </h3>";
                    }

                }


            ?>

















        </div>


    </div>
</body>
</html>


