<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | manage Student</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
  
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
        <div class="container">
            <div class="navabar-brand"><a href="../index.php">PDN</a> </div>
            <ul class="navbar-nav">
                <li><a href="../pages/addStudent.php" class="nav-link"> Add Student </a></li>
               
                <li><a href="../pages/manageStudent.php" class="nav-link"> Manage Student</a></li>
            </ul>
        </div>
    </nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto" >
                <table class="table table-border table-hover text-center">
                  <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name </th>
                            <th>Depatment </th>
                            <th>Shift</th>
                            <th>Roll</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $i=0;
                    $dbconnect = mysqli_connect('localhost', 'root', '', 'sms'); 
                    $select = "SELECT * FROM student_info";
                    $result = mysqli_query($dbconnect, $select); 
                    while($student = mysqli_fetch_assoc($result)){ 
                        $i++;
                        ?> 
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $student['name'];?></td>
                            <td><?php echo $student['class'];?></td>
                            <td><?php echo $student['section'];?></td>
                            <td><?php echo $student['roll'];?></td>
                            <td><?php echo $student['mobile'];?></td>
                            <td><?php echo $student['email'];?></td>
                            <td><?php echo $student['address'];?></td>
                            <td>
                                <a href="detail.php?id=<?php echo $student['id'];?>" class="btn btn-info btn-sm"> View </a>
                                <a href="edit-student.php?id=<?php echo $student['id'];?>" class="btn btn-warning btn-sm"> Edit</a>
                                <a href="delete-student.php?id=<?php echo $student['id'];?>" class="btn btn-danger btn-sm"> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    } 
                    
                    ?>
                 

                  </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



    

    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>