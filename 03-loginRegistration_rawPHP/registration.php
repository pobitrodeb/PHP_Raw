<?php include'index.php'; ?> 

<?php 

$dbConnection = mysqli_connect('localhost', 'root', '', 'loginregistration'); 

if(isset($_POST['resubmit']))
{
    $fullname           = $_POST['fullname'];
    $username           = $_POST['username'];
    $email              = $_POST['email'];
    $address            = $_POST['address'];

    if(isset($_POST['gender'])){{$gender = $_POST['gender'];}}
    if(isset($_POST['shift'])){{$shift = $_POST['shift'];}}
    if(isset($_POST['interest'])){{$interest = $_POST['interest'];}}
    if(isset($_POST['country'])){{$country = $_POST['country'];}}

    $password           = $_POST['password'];
    $confirmpassword    = $_POST['confirmpassword'];

    $error = [];

    if(empty($fullname ))
    {
        $error['fullname'] = 'Please Write your full name'; 
    }

    if(empty($username))
    {
        $error['username'] = 'Please Write your username'; 
    }

    if(empty($email))
    {
        $error['email'] = 'Please Write your email'; 
    }

    if(empty($address))
    {
        $error['address'] = 'Please Write your address'; 
    }

    if(empty($gender))
    {
        $error['gender'] = 'Please Write your gender'; 
    }
    if(empty($shift))
    {
        $error['shift'] = 'Please Write your shift'; 
    }
    if(empty($interest))
    {
        $error['interest'] = 'Please Write your interest'; 
    }
    if(empty($country))
    {
        $error['country'] = 'Please Write your country'; 
    }
    if(empty($password))
    {
        $error['password'] = 'Please Write your password'; 
    }
    if(empty($confirmpassword))
    {
        $error['confirmpassword'] = 'Please Write your confirm passworrd'; 
    }

    if(count($error) == 0)
    {
       $email_check = mysqli_query($dbConnection, "SELECT * FROM users WHERE email=='$email'"); 
       $email_Count = mysqli_num_rows($email_check);
       
       if($email_Count == 0)
       {
        echo 'No email match';
       }
       else {
        echo 'email mathc';
       }

    }else
    {
        echo 'NO'; 
    }
    
}

?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">

            <div class="card">
                <div class="card-header">Registrer Form </div>

                <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> Full Name </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php if(isset($fullname)){echo $fullname;}?>" name="fullname">

                                <span>
                                    <?php 
                                        if(isset($error['fullname']))
                                        {
                                            echo $error['fullname'];
                                        }
                                    ?>
                                </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">User Name </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="<?php if(isset($username)){echo $username;}?>" name="username">
                                <span>
                                    <?php 
                                        if(isset($error['username']))
                                        {
                                            echo $error['username'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">Email Address </label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" value="<?php if(isset($email)){echo $email;}?>" name="email">
                                <span>
                                    <?php 
                                        if(isset($error['email']))
                                        {
                                            echo $error['email'];
                                        }
                                    ?>
                                </span>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">Parmanet Address  </label>
                            <div class="col-md-9">
                               <textarea cols="30" rows="4" class="form-control" name="address">
                               <?php if(isset($address)){echo $address;}?>
                               </textarea>
                               <span>
                                    <?php 
                                        if(isset($error['address']))
                                        {
                                            echo $error['address'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">Gender </label>
                            <div class="col-md-9">
                              <input type="radio" name="gender" value="<?php if(isset($gender) && $gender == 'Male'){echo 'checked';} ?>"> Male 
                              <input type="radio" name="gender" value="<?php if(isset($gender) && $gender == 'female'){echo 'checked';} ?>"> Female 
                              <br>
                              <span>
                                    <?php 
                                        if(isset($error['gender']))
                                        {
                                            echo $error['gender'];
                                        }
                                    ?>
                            </span>
                            </div>
                            
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> Shift </label>
                            <div class="col-md-9">
                              <input type="radio" name="shift" value="<?php if(isset($shift) && $shift == 'day') {echo 'checked';}?>"> Day 
                              <input type="radio" name="shift" value="<?php if(isset($shift) && $shift == 'day') {echo 'day';}?>"> Evening 
                              <br>
                              <span>
                                    <?php 
                                        if(isset($error['shift']))
                                        {
                                            echo $error['shift'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">  Interest At  </label>
                            <div class="col-md-9">
                              <input type="checkbox" name="interest[]" value="<?php if(isset($interest)){ if(in_array('web proggaming', $interest)){echo 'checked';}} ?>"> Web Programing
                              <input type="checkbox" name="interest[]" value="<?php if(isset($interest)){ if(in_array('graphic design', $interest)){echo 'checked';}} ?>" class="mx-2"> Grrahip Design 
                              <input type="checkbox" name="interest[]" value="<?php if(isset($interest)){ if(in_array('robotics', $interest)){echo 'checked';}} ?>" class="mx-2"> Robotics  
                              <input type="checkbox" name="interest[]" value="<?php if(isset($interest)){ if(in_array('datascince', $interest)){echo 'checked';}} ?>" class="mx-2"> Data Science 
                            </div>
                            <span>
                                    <?php 
                                        if(isset($error['interset']))
                                        {
                                            echo $error['interset'];
                                        }
                                    ?>
                                </span>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> Country </label>
                            <div class="col-md-9">
                              <select name="" id="" class="form-control">
                                <option value="" disabled selected> Select one </option>
                                <option value="Bangladesh"<?php if(isset($country)) {if(in_array('Bangaldesh', $country)){echo 'selected';}}?> name="country"> Bangladesh </option>
                                <option value="UK"<?php if(isset($country)) {if(in_array('UK', $country)){echo 'selected';}}?> name="country"> UK  </option>
                                <option value="Us"<?php if(isset($country)) {if(in_array('US', $country)){echo 'selected';}}?> name="country"> uS </option>
                              </select>
                              <span>
                                    <?php 
                                        if(isset($error['address']))
                                        {
                                            echo $error['address'];
                                        }
                                    ?>
                                </span>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password">
                                <span>
                                    <?php 
                                        if(isset($error['password']))
                                        {
                                            echo $error['password'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3"> Confirm Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="confirmpassword">
                                <span>
                                    <?php 
                                        if(isset($error['confirmpassword']))
                                        {
                                            echo $error['confirmpassword'];
                                        }
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success w-100" name="resubmit">
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>

            </div>
        </div>
    </div>
</section>