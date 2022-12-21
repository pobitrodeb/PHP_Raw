<?php include'includes/header.php' ?>

    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="slider">
        <ol class="carousel-indicators">
            <li data-bs-target="#slider" data-bs-slide-to="0"></li>
            <li data-bs-target="#slider" data-bs-slide-to="1" class="active"></li>
            <li data-bs-target="#slider" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="assets/img/s1.jpg" alt="" class="w-100 h-600"/>
                <div class="carousel-caption my-caption">
                    <h1>This is carousel caption one</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At qui soluta voluptas. Consequatur, dolor ea earum eius incidunt iste iusto magni maiores necessitatibus odio optio praesentium quaerat quo sequi voluptates!</p>
                    <a href="" class="btn btn-success">Detail</a>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="assets/img/s2.jpg" alt="" class="w-100 h-600"/>
                <div class="carousel-caption my-caption">
                    <h1>This is carousel caption one</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At qui soluta voluptas. Consequatur, dolor ea earum eius incidunt iste iusto magni maiores necessitatibus odio optio praesentium quaerat quo sequi voluptates!</p>
                    <a href="" class="btn btn-success">Detail</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/s3.jpg" alt="" class="w-100 h-600"/>
                <div class="carousel-caption my-caption">
                    <h1>This is carousel caption one</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At qui soluta voluptas. Consequatur, dolor ea earum eius incidunt iste iusto magni maiores necessitatibus odio optio praesentium quaerat quo sequi voluptates!</p>
                    <a href="" class="btn btn-success">Detail</a>
                </div>
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            This is card header
                        </div>
                        <div class="card-body">
                            <h1>This is a heading.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum magni molestiae nisi quis quo veritatis? Ad autem cum delectus doloribus fuga ipsum laboriosam molestias nihil officia, quia rerum sequi sint?</p>
                        </div>
                        <div class="card-footer">
                            This is card footer
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            This is card header
                        </div>
                        <div class="card-body">
                            <h1>This is a heading.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum magni molestiae nisi quis quo veritatis? Ad autem cum delectus doloribus fuga ipsum laboriosam molestias nihil officia, quia rerum sequi sint?</p>
                        </div>
                        <div class="card-footer">
                            This is card footer
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            This is card header
                        </div>
                        <div class="card-body">
                            <h1>This is a heading.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum magni molestiae nisi quis quo veritatis? Ad autem cum delectus doloribus fuga ipsum laboriosam molestias nihil officia, quia rerum sequi sint?</p>
                        </div>
                        <div class="card-footer">
                            This is card footer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                    <?php foreach ($products as $product) { ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="assets/img/<?php echo $product['image'];;?>" alt="" class="card-img-top h-250"/>
                                <div class="card-body">
                                    <h5><?php echo $product['name'];?></h5>
                                    <p><?php echo $product['price'];?></p>
                                    <hr/>
                                    <a href="action.php?page=detail" class="btn btn-success">Detail</a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
        </div>
    </section>
<?php include'includes/footer.php' ?>
                <!-- <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/p2.jpg" alt="" class="card-img-top h-250"/>
                        <div class="card-body">
                            <h5>Product Name</h5>
                            <p>TK. 4500</p>
                            <hr/>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/p3.jpg" alt="" class="card-img-top h-250"/>
                        <div class="card-body">
                            <h5>Product Name</h5>
                            <p>TK. 4500</p>
                            <hr/>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/p4.jpg" alt="" class="card-img-top h-250"/>
                        <div class="card-body">
                            <h5>Product Name</h5>
                            <p>TK. 4500</p>
                            <hr/>
                            <a href="" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                </div> -->
            </div>
  