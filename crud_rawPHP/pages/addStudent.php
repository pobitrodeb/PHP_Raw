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
                <div class="card-header bg-success text-white"> <b>Add Student Infromation</b></div>
            </div>
            <div class="card-body">

                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Student Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Class</label>
                        <div class="col-md-9">
                        <select class="form-select form-select-md " name="class">
                            <option disabled selected>Select Depatment</option>
                            <option value="CSE">CSE</option>
                            <option value="EEE">EEE</option>
                            <option value="ME">ME</option>
                            <option value="CE">CE</option>
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Shift</label>
                        <div class="col-md-9">
                        <select class="form-select form-select-md " name="section">
                        <option disabled selected>Select Shift</option>
                            <option value="Day">Day</option>
                            <option value="Night">Night</option>
                            <option value="Friday">Friday</option>
                        </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Roll</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="roll">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">Mobile</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="phone">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-3">E-mail</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="" class="col-md-3">Address</label>
                        <div class="col-md-9">
                        <textarea class="form-control" rows="3" name="address"></textarea>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="" class="col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-success w-100" name="add_student_submit" value="Create A New Student">
                        </div>
                    </div>

                </form>

                    <?php 
                            $dbconnect = mysqli_connect('localhost', 'root', '', 'sms'); 
                            if(isset($_POST['add_student_submit']))
                            {
                              $name    = $_POST['name']; 
                              $class   = $_POST['class']; 
                              $section = $_POST['section']; 
                              $roll    = $_POST['roll']; 
                              $phone   = $_POST['phone']; 
                              $email   = $_POST['email']; 
                              $address = $_POST['address']; 
                            
                                $sql= "INSERT INTO student_info VALUES 
                                (NULL,'$name','$class','$section','$roll','$phone','$email','$address')";
                                $inesertDatabase = mysqli_query($dbconnect, $sql); 
                                if($inesertDatabase)
                                {
                                   echo '<h1>Student Create Successfully</h1>';
                                }
                                else{
                                    echo 'Faild';
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