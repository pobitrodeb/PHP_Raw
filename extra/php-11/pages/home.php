<?php include "includes/header.php"?>

<!--    ########## Hero section slider ########-->
<div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1880" id="slider">
    <ol class="carousel-indicators">
        <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#slider" data-bs-slide-to="1" class=""></li>
        <li data-bs-target="#slider" data-bs-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active w-100 h-600" >
            <img src="assets/img/first.jpg" alt="" class="w-100">
            <div class="carousel-caption mycaption">
                <h2 class="text-black-50">First Slider</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi beatae corporis eligendi
                    qui rerum, sed! Ad adipisci architecto, blanditiis culpa eos et, iste nulla quae, reprehenderit
                    sapiente tempora velit.
                </p>
                <a href="#" class="btn btn-success" >Detail</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/secound.jpg" alt="" class="w-100 h-600">
        </div>
        <div class="carousel-item">
            <img src="assets/img/three.jpg" alt="" class="w-100 h-600">
        </div>
    </div>
    <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" ></span>
    </a>
    <a href="#slider" class="carousel-control-next" data-bs-slide="next">
        <span class="carousel-control-next-icon" ></span>
    </a>
</div>
<!--    ########## End Hero section slider ########-->
<!--############# Start Card ################ -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            this is card header
                        </div>
                        <div class="card-body">

                           <h1>This is Heading </h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nemo nostrum ratione!</p>
                        </div>
                        <div class="card-footer">
                            this is card footer
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        this is card header
                    </div>
                    <div class="card-body">

                      <h1> This is heading </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nemo nostrum ratione!</p>
                    </div>
                    <div class="card-footer">
                        this is card footer
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        this is card header
                    </div>
                    <div class="card-body">

                        <h>This is Heading  </h>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nemo nostrum ratione!</p>
                    </div>
                    <div class="card-footer">
                        this is card footer
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--!--############# Start Card ################ -->-->
 <section>
     <div class="container">
         <div class="row">
             <?php foreach ($products as $product){ ?>
             <div class="col-md-3">
               <div class="card">
                   <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top h-250">
                   <div class="card-body">
                       <h5> <?php echo $product['name'];?> </h5>
                       <p> <?php echo $product['price']; ?> </p>
                       <hr>
                       <a href="" class="btn btn-success"> Detail</a>
                   </div>
               </div>
             </div>
          <?php }?>
         </div>
     </div>
 </section>
<?php include "includes/footer.php"?>

<!--!--############# footer Card ################ -->-->
