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
                        <a href="<?=base_url() . 'dashboard/orders'?>" class="nav-link waves-effect">
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

<div class="container mt-5">
    <div class="row">
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Three charts -->
            <!-- ============================================================== -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="alert alert-secondary" role="alert">
                        <h2 class="text-center">
                            <span class="material-icons">
                                inventory_2
                            </span>
                            Products
                        </h2>
                        <h3 class="text-center"><?=$total_products?></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="alert alert-secondary" role="alert">
                        <h2 class="text-center">
                            <span class="material-icons">
                                inventory_2
                            </span>
                            Pending Orders
                        </h2>
                        <h3 class="text-center"><?=$pending_processes?></h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="alert alert-secondary" role="alert">
                        <h2 class="text-center">
                            <span class="material-icons">
                                inventory_2
                            </span>
                            Customers
                        </h2>
                        <h3 class="text-center"><?=$total_customers?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of row -->
</div> <!-- end of container -->
