<?php
$sub_total = 0;
$shipping = 1;
?>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-gold sticky-top scrolling-navbar">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand font-weight-bold" href="<?=base_url() . 'dashboard'?>">
                Shop 88
            </a>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="<?=base_url() . 'dashboard/orders'?>" class="nav-link waves-effect active">
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url() . 'dashboard/products'?>" class="nav-link waves-effect">
                            Products
                        </a>
                    </li>
                </ul>
                <!-- Right -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item pl-2 mb-2 mb-md-0">
                        <a href="<?=base_url() . 'pages/logout'?>"
                            class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">
                            Sign out
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
            <div class="col-12 mb-3">
                <!-- papalit -->
                <a href="<?=base_url() . 'dashboard/orders'?>" class="btn btn-info btn-sm">Go Back</a>
            </div>
            <div class="col-3">
                <div class="card bg-light mb-3">
                    <div class="card-header font-weight-bold">Order ID: <?=$order['id']?></div>
                    <div class="card-body">
                        <div class="card-text">
                            <h6 class="card-title">Customer shipping info</h6>
                            <ul>
                                <li>Name: <?=$order['first_name'] . ' ' . $order['last_name']?></li>
                                <li>Address: <?=$order['s_address']?></li>
                                <li>City: <?=$order['s_city']?></li>
                                <li>State <?=$order['s_state']?></li>
                                <li>Zip <?=$order['s_zipcode']?></li>
                            </ul>
                        </div>
                        <h6 class="card-title">Customer billing info</h6>
                        <div class="card-text">
                            <ul>
                                <li>Name: <?=$order['first_name'] . ' ' . $order['last_name']?></li>
                                <li>Address: <?=$order['b_address']?></li>
                                <li>City: <?=$order['b_city']?></li>
                                <li>State <?=$order['b_state']?></li>
                                <li>Zip <?=$order['b_zipcode']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
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
                        <?php foreach ($ordered_items as $ordered_item): ?>
                        <tr>
                            <td>
                                <img src="<?=base_url() . 'uploads/' . $ordered_item['main_image_url']?>"
                                    class="product-img" alt="<?=$ordered_item['name']?>">
                            </td>
                            <td><?=$ordered_item['name']?></td>
                            <td>$<?=$ordered_item['price']?></td>
                            <td><?=$ordered_item['qty']?></td>
                            <td>$<?=$ordered_item['price'] * $ordered_item['qty']?></td>
                            <?php $sub_total += ($ordered_item['price'] * $ordered_item['qty'])?>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-6">
                        <div class="alert alert-success" role="alert">
                            Status: <?=$status['status']?>
                        </div>
                    </div>
                    <div class="col-4 ml-auto">
                        <div class="alert alert-dark" role="alert">
                            <p>Sub Total: $<?=$sub_total?></p>
                            <p>Shipping: $<?=$shipping?></p>
                            <p class="font-weight-bold">Total Price: $<?=$sub_total + $shipping?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
