<?php
//to identify pagination limits
$rows = ceil($total_products / 8);
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
                    <li class="nav-item">
                        <a href="<?=base_url()?>" class="nav-link waves-effect active">
                            Shop
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url()?>" class="nav-link waves-effect">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item pl-2 mb-2 mb-md-0">
                        <a href="<?=base_url() . 'pages/logout'?>" type="button"
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
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-2">
                <form class="form-inline mb-3">
                    <input class="form-control col-10 mr-2" type="text" placeholder="Search" aria-label="Search">
                    <a href="#">
                        <span class="material-icons mt-2 text-dark">search</span>
                    </a>
                </form>
                <div class="list-group">
                    <?php foreach ($categories as $category): ?>
                    <a href="<?=base_url() . 'products/categories/' . $category['id'] . '/1'?>"
                        class="list-group-item list-group-item-action"><?=$category['category']?></a>
                    <?php endforeach;?>
                    <a href="<?=base_url() . 'products'?>" class="list-group-item list-group-item-action">Show All</a>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-4">
                        <h1 class="mt-n2">
                            <?=$active_category['category'] . ' (page ' . $current_page . ')'?>
                        </h1>
                    </div>
                    <div class="col-3 ml-auto">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item mr-1 <?=($current_page == 1) ? "disabled" : ""?>">
                                    <a class="page-link"
                                        href="<?=base_url() . 'products/categories/' . $current_category . '/' . ($current_page - 1)?>">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="page-link disabled">
                                        <?=$current_page?>
                                    </a>
                                </li>
                                <li class="page-item <?=($current_page == $rows) ? "disabled" : ""?>">
                                    <a class="page-link"
                                        href="<?=base_url() . 'products/categories/' . $current_category . '/' . ($current_page + 1)?>">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($products as $product): ?>
                    <div class="col-3 mt-1">
                        <div class="card">
                            <img src="<?=base_url() . 'uploads/' . $product['main_image_url']?>" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-title"><?=$product['name']?></p>
                                <p class="font-weight-bold"><?=$product['price']?></p>
                                <a href="<?=base_url() . 'products/show/' . $product['id']?>"
                                    class="btn btn-gold">View</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div> <!-- end of child row -->
            </div>
        </div> <!-- end of parent row -->
    </div>
</main>
