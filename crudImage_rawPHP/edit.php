<?php include'./pages/header.php'?>
<?php 

    $dbConnect = mysqli_connect('localhost', 'root', '', 'crudImage');
    $id = $_GET['id']; 
    $sql = "SELECT * FROM image WHERE id=$id";  
    $result = mysqli_query($dbConnect, $sql);
    $imageDetail = mysqli_fetch_assoc($result); 

    if(isset($_POST['submit']))
    {
         $name      = $_FILES['image']['name']; 
         $location  = $_FILES['image']['tmp_name']; 
         $size      = $_FILES['image']['size']; 
         $file_expo = explode('.', $name);
         $fileLowerr = strtolower(end($file_expo));
         $fileApprove = array('png', 'jpg');
         $rename = date('Y'). ' '.rand(9,999). '.'.$fileLowerr;
         $update    = move_uploaded_file($location, 'assets/img/'. $rename); 
    
         if(in_array($fileLowerr, $fileApprove, $rename)){
                if($size > 1000000 ){
                            if($update){
                                $updateImge = "UPDATE crudimage SET image='$rename' WHERE id='$id'";
                                mysqli_query($dbConnect, $updateImge); 
                                if($updateImge){
                                    header('Location:index.php'); 
                                } else{ echo 'Vai Image den'; }
                            }else{ echo ' no found'; }
                        }else {
                            echo 'Not allow gratter than 1mb';}
                    }else{echo 'Image must be png or jpg';}
    }
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                            <img style="width: 250px; height:150px; margin: 5px 0px;" src="assets/img/<?php echo $imageDetail['image'] ?>" alt="">
                            <input type="file" class="form-control my-4" name="image">
                            <input type="submit" class="btn btn-success w-100" name="submit" value="Update Image">
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include'./pages/footer.php'?>