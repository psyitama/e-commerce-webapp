<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-gold sticky-top scrolling-navbar">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand font-weight-bold" href="<?=base_url()?>">
                Shop 88
            </a>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Right -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?=base_url() . 'customers/carts'?>" class="nav-link navbar-link-2 waves-effect">
                            <span class="badge badge-danger" id="cart_qty"></span>
                            <i class="fas fa-shopping-cart pl-0"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Links -->
        </div>
    </nav>
    <!-- Navbar -->
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <a href="<?=base_url() . 'products'?>" class="btn btn-info btn-sm">Go Back</a>
                <h1><?=$product['name']?></h1>
            </div>
            <div class="col-3">
                <img src="<?=base_url() . 'uploads/' . $product['main_image_url']?>" class="img-thumbnail" alt="...">
            </div>
            <div class="col-9">
                <div class="product-desc overflow-auto"><?=$product['description']?></div>
            </div>
            <div class="col-3 ml-auto mt-3 text-center">
                <div class="cart-success alert alert-success" role="alert">
                    Item added to the cart.
                </div>
                <div class="cart-failed alert alert-danger" role="alert">
                    Please enter a quantity.
                </div>
                <?=form_open('customers/add_item', 'id="add_item"')?>
                <div class="form-group">
                    <label for="add-cart-qty">Quantity</label>
                    <input type="hidden" name="id" value="<?=$product['id']?>">
                    <input type="hidden" name="name" value="<?=$product['name']?>">
                    <input type="hidden" name="price" value="<?=$product['price']?>">
                    <input type="hidden" name="image" value="<?=$product['main_image_url']?>">
                    <input type="number" class="form-control" id="item_qty" name="qty" min="1">
                </div>
                <input class="btn btn-gold" id="add_cart_btn" type="submit" value="Add to cart">
                <?=form_close()?>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->


    <div class="container">
        <h2>Similar Items</h2>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <div class="row">
                        <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="col-3">
                            <a href="<?=base_url() . 'products/show/' . $related_products[$i]['id']?>">
                                <img src="<?=base_url() . 'uploads/' . $related_products[$i]['main_image_url']?>"
                                    class="d-block w-100" alt="...">
                            </a>
                            <p class="text-dark text-center font-weight-bold"><?=$related_products[$i]['name']?></p>
                        </div>
                        <?php endfor;?>
                    </div>
                </div>
                <div class="carousel-item" data-interval="10000">
                    <div class="row">
                        <?php for ($i = 4; $i < 8; $i++): ?>
                        <div class="col-3">
                            <a href="<?=base_url() . 'products/show/' . $related_products[$i]['id']?>">
                                <img src="<?=base_url() . 'uploads/' . $related_products[$i]['main_image_url']?>"
                                    class="d-block w-100" alt="...">
                            </a>
                            <p class="text-dark text-center font-weight-bold"><?=$related_products[$i]['name']?></p>
                        </div>
                        <?php endfor;?>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</main>
