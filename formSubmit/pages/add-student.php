<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
             <div class="card">
                 
                 <div class="card-header">
                     Add Student Information
                 </div>
                 
                 <div class="card-body">
                     
                     <form action="action.php"  method="post" enctype="multipart/form-data">

                         <div class="row mb-3">
                             <label for="" class="col-md-4"> Full Name </label>
                           <div class="col-md-8">
                               <input type="text" class="form-control" name="name">
                           </div>
                         </div>

                         <div class="row mb-3">
                             <label for="" class="col-md-4"> Email Address</label>
                             <div class="col-md-8">
                                 <input type="email" class="form-control" name="email">
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label for="" class="col-md-4"> Mobile Numberr </label>
                             <div class="col-md-8">
                                 <input type="number" class="form-control" name="mobile">
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label for="" class="col-md-4"> Student Image </label>
                             <div class="col-md-8">
                                 <input type="file" class="form-control" name="image">
                             </div>
                         </div>

                         <div class="row mb-3">
                             <label for="" class="col-md-4"> </label>
                             <div class="col-md-8">
                                 <input type="submit" value="Submit" class="btn btn-success btn-lg" name="submit_btn">
                             </div>
                         </div>

                     </form>
                     
                 </div>
                 
             </div>
          </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>

