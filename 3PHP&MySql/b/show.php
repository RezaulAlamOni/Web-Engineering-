<?php require_once('db.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
    <?php
        $sql = "SELECT * from employees";

        $result = mysqli_query($con,$sql);

        $total = 0;

    ?>
<body>

    <h1 class="text-center text-success">All Employee List</h1> <br><br>
    <div class="container">
        <table class="table table-bordered">
           <thead >
             <tr >
               <th class="text-center">ID</th>
               <th class="text-center">Name</th>
               <th class="text-center">Address</th>
               <th class="text-center">Email</th>
               <th class="text-center">Phone</th>
               <th class="text-center">Salary</th>
               <th class="text-center">Action</th>
             </tr>
           </thead>
           <tbody>
           <?php while($row = mysqli_fetch_assoc($result)){

               $id = $row['id'];
               $name = $row['name'];
               $address = $row['address'];
               $email = $row['email'];
               $phone = $row['phone'];
               $salary = $row['salary'];

               $total += $salary;

               ?>
               <tr>
                   <td><?php echo $id ; ?></td>
                   <td><?php echo $name; ?></td>
                   <td><?php echo $address; ?></td>
                   <td><?php echo $email; ?></td>
                   <td><?php echo $phone; ?></td>
                   <td class="text-center"><?php echo $salary; ?></td>
                   <td>
                       <a href="">Edit ||</a>
                       <a href="" style="color: red">Delete</a>
                   </td>
               </tr>

          <?php } ?>
           <tr class="text-center">
               <td class="text-center" colspan="5"><b>Total</b></td>
               <td><?php echo $total; ?></td>
           </tr>
          </tbody>
        </table>
        <a class="btn btn-success col-md-6" href="index.php">Add Employee</a>

    </div>
</body>
</html>

