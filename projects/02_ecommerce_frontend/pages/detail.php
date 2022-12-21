<?php include "includes/header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <div class="xzoom-container">
                        <img class="xzoom w-100" id="xzoom-default" src="assets/img/<?php echo $singleProduct['image']; ?>" xoriginal="assets/img/<?php echo $singleProduct['image']; ?>"/>
                        <div class="xzoom-thumbs">
                            <a href="assets/img/<?php echo $singleProduct['image']; ?>"><img class="xzoom-gallery" width="80" src="assets/img/<?php echo $singleProduct['image']; ?>" title="The description goes here"></a>
                            <a href="assets/img/<?php echo $singleProduct['image1']; ?>"><img class="xzoom-gallery" width="80" src="assets/img/<?php echo $singleProduct['image1']; ?>" title="The description goes here"></a>
                            <a href="assets/img/<?php echo $singleProduct['image2']; ?>"><img class="xzoom-gallery" width="80" src="assets/img/<?php echo $singleProduct['image2']; ?>" title="The description goes here"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $singleProduct['name']; ?></h1>
                    <p>Category Name: Product Category</p>
                    <p>Brand Name: Product Brand</p>
                    <hr/>
                    <h3>TK. <?php echo $singleProduct['price']; ?></h3>
                    <hr/>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at eveniet ipsam sed tenetur! Alias, consequatur corporis dolorem doloremque facilis hic impedit inventore laborum magnam non placeat quibusdam voluptates voluptatum.</p>
                    <hr/>
                    <div>
                        <input type="number" class="form-control" value="1" min="1"/>
                    </div>
                    <div class="mt-3">
                        <input type="button" class="btn btn-success px-5" value="Add To Cart"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card card-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A blanditiis debitis dolore dolorum eos et expedita, hic illum inventore molestias quidem repellat reprehenderit ut! Aut explicabo facere quidem saepe voluptatibus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "includes/footer.php"; ?>
