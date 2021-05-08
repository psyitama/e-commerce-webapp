<?php
$total_price = 0;
?>
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
                            <span class="badge badge-danger"><?=count($this->cart->contents())?></span>
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
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Picture</th>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody id="cart_items">
                        <?php foreach ($this->cart->contents() as $product): ?>
                        <tr>
                            <td>
                                <img src="<?=base_url() . 'uploads/' . $product['image']?>" class="product-img"
                                    alt="<?=$product['name']?>">
                            </td>
                            <td><?=$product['name']?></td>
                            <td>$<?=$product['price']?></td>
                            <td><?=$product['qty']?></td>
                            <td>$<?=$product['price'] * $product['qty']?></td>
                            <?php $total_price += ($product['price'] * $product['qty'])?>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 text-right">
                <h5 class="font-weight-bold">Price: $<?=$total_price?></h5>
                <a class="btn btn-success" href="<?=base_url() . 'products'?>">Continue Shopping</a>
            </div>
        </div> <!-- end of row -->

        <div class="row">
            <div class="col-12">
                <form>
                    <h3>Shipping Information</h3>
                    <div class="form-group row">
                        <label for="s_first_name" class="col-sm-2 col-form-label">First Name:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="s_first_name" id="s_first_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="s_last_name" class="col-sm-2 col-form-label">last Name:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="s_last_name" id="s_last_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="s_address" class="col-sm-2 col-form-label">Address:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="s_address" id="s_address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="s_city" class="col-sm-2 col-form-label">City:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="s_city" id="s_city">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="s_state" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="s_state" id="s_state">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="s_zip" class="col-sm-2 col-form-label">Zipcodes:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="s_zip" id="s_zip">
                        </div>
                    </div>
                    <h3 class="mt-3">Billing Information</h3>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="same_as_chk">
                        <label class="form-check-label" for="same_as_chk">
                            Same as Shipping
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="b_first_name" class="col-sm-2 col-form-label">First Name:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="b_first_name" id="b_first_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="b_last_name" class="col-sm-2 col-form-label">last Name:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="b_last_name" id="b_last_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="b_address" class="col-sm-2 col-form-label">Address:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="b_address" id="b_address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="b_city" class="col-sm-2 col-form-label">City:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="b_city" id="b_city">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="b_state" class="col-sm-2 col-form-label">State</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="b_state" id="b_state">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="b_zip" class="col-sm-2 col-form-label">Zipcodes:</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="b_zip" id="b_zip">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end of container -->
</main>
