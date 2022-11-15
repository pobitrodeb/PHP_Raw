<?php 

    
    include 'master/headerr.php';
?>
  <div class="col-md-9">
    <form action="create-user.php" method="POST">
        <div class="row mb-3">
            <div class="col-md-3"> Full Name </div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="fullName" required>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3"> User Name </div>
            <div class="col-md-9">
                <input type="text" class="form-control" name="userName" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3"> User Email </div>
            <div class="col-md-9">
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3"> User Password </div>
            <div class="col-md-9">
                <input type="password" class="form-control" name="password" required>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-md-3"> User Role  </div>
            <div class="col-md-9">
             <select  class="form-control" name="ueserRole" required>
                <option selected disabled>--- Select Role -----</option>
                <option value="0">Admin </option>
                <option value="1">Modarator</option>
             </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <button type="submit" class="btn btn-primary w-100" name="submit"> Create New User </button>
            </div>
        </div>

    </form>
  </div>


<?php include 'master/footer.php' ?>