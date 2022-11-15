<?php 
     $dbconnect = mysqli_connect('localhost', 'root', '', 'sms');  
     $id = $_GET['id'];
     $signleStudentDbID = "SELECT * FROM student_info WHERE id = $id";
     $result = mysqli_query($dbconnect, $signleStudentDbID); 
     $studentID = mysqli_fetch_assoc($result); 
     //return $studentID;       
?>
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

    <!-- ########## STUDENT FORM ############  -->
    <section class="py-5">
        <div class="container">
           <div class="row">
            <div class="col-md-10 mx-auto">
            <div class="card borderd">
                <div class="card-header bg-warning text-drak"> <b>Update Infromation</b></div>
            </div>
            <div class="card-body">

                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Student Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="<?php echo $studentID['name'];?>"/>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Class</label>
                        <div class="col-md-9">
                        <select class="form-select form-select-md " name="class">
                            <option disabled selected>Select Depatment</option>
                            <option value="CSE" <?php if($studentID['class']=='CSE'){echo 'selected';}?>>CSE</option>
                            <option value="EEE"<?php if($studentID['class']=='EEE'){echo 'selected';}?>>EEE</option>
                            <option value="ME" <?php if($studentID['class']=='ME'){echo 'selected';}?>>ME</option>
                            <option value="CE"<?php if($studentID['class']=='CE'){echo 'selected';}?>>CE</option>
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Shift</label>
                        <div class="col-md-9">
                        <select class="form-select form-select-md " name="section">
                        <option disabled selected>Select Shift</option>
                            <option value="Day"<?php if($studentID['section']=='Day'){echo 'selected';}?>>Day</option>
                            <option value="Night"<?php if($studentID['section']=='Night'){echo 'selected';}?>>Night</option>
                            <option value="Friday"<?php if($studentID['section']=='Friday'){echo 'selected';}?>>Friday</option>
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Roll</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="roll" value="<?php echo $studentID['roll'];?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Mobile</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="phone" value="<?php echo $studentID['mobile']?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">E-mail</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" value="<?php echo $studentID['email'];?>">
                        </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Address</label>
                        <div class="col-md-9">
                        <textarea class="form-control" rows="3" name="address">
                            <?php echo $studentID['address'] ;?>
                        </textarea>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-warning  w-100" name="add_student_submit" value="Update student Information">
                        </div>
                    </div>
                </form>
                <?php
                if(isset($_POST['add_student_submit']))
                { 
                        $updateID = $studentID['id'];  
                        $name    = $_POST['name']; 
                        $class   = $_POST['class']; 
                        $section = $_POST['section']; 
                        $roll    = $_POST['roll']; 
                        $phone   = $_POST['phone']; 
                        $email   = $_POST['email']; 
                        $address = $_POST['address']; 
                        $updateSql = "UPDATE student_info SET name='$name', $class='class', $section='section',
                         $roll='roll', $phone='phone', $email='email', $address='address' WHERE id= $updateID";
                         $dbUpdate = mysqli_query($dbconnect, $updateSql); 

                         if($dbUpdate)
                         {
                            echo 'Success'; 
                         }
                         else{
                            echo 'faild'; 
                         }
                }
                ?> 
            </div>
            </div>
           </div>
        </div>
    </section>


    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>