<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | add Student</title>
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
    
<?php 
    
    $id =  $_GET['id'];
    $dbconnect = mysqli_connect('localhost', 'root', '', 'sms');
    $signleStudentDbID = "SELECT * FROM student_info WHERE id = $id";
    $result = mysqli_query($dbconnect, $signleStudentDbID); 
    $studentID = mysqli_fetch_assoc($result);
?>
  <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header bg-info text-center text-capitalize">
                        <?php echo $studentID['name'];?> Information 
                        </div>
                        <div class="card-body">
                           <table class="table table-bordered table-hover">

                            <tr>
                                <th>Full Name</th>
                                <td><?php echo $studentID['name'];?></td>
                            </tr>

                            <tr>
                                <th>Depatment </th>
                                <td><?php echo $studentID['class'];?></td>
                            </tr>

                            <tr>
                                <th>Shift </th>
                                <td><?php echo $studentID['section'];?></td>
                            </tr>
                            <tr>
                                <th>Roll </th>
                                <td><?php echo $studentID['roll'];?></td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td><?php echo $studentID['mobile'];?></td>
                            </tr>

                            <tr>
                                <th>Email </th>
                                <td><?php echo $studentID['email'];?></td>
                            </tr>

                            <tr>
                                <th>Address </th>
                                <td><?php echo $studentID['address'];?></td>
                            </tr>
                            <tr>
                                <th> </th>
                                <td>
                                    <a href="" class="btn btn-info w-100">Download All Information</a>
                                    
                                </td>
                            </tr>
                           </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="../assets/img/man.jpg" alt="" height="400" width="380">
                   
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>