<?php include 'includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">All Category</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">Category One</a>
                            <a href="" class="list-group-item">Category Two</a>
                            <a href="" class="list-group-item">Category Three</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">Search By Price</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">0 to 1000</a>
                            <a href="" class="list-group-item">1000 to 3000</a>
                            <a href="" class="list-group-item">3000 to 5000</a>
                            <a href="" class="list-group-item">5000 to 10000</a>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">All Brand</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">Sony</a>
                            <a href="" class="list-group-item">Yellow</a>
                            <a href="" class="list-group-item">Gentle Park</a>
                            <a href="" class="list-group-item">Walton</a>
                            <a href="" class="list-group-item">Arong</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($products as $product) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top h-250"/>
                            <div class="card-body">
                                <h5><?php echo $product['name']; ?></h5>
                                <p>TK. <?php echo $product['price']; ?></p>
                                <hr/>
                                <a href="action.php?page=detail" class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>
