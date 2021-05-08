<?php
//available results per page
$result_per_page = 5;
//determine number of total pages available
$number_of_pages = ceil(count($total_orders) / $result_per_page);
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
            <!-- search -->
            <div class="col-6 mb-3">
                <form id="search" action="leads/search_client" method="POST">
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" name="order" class="form-control" id="search_order"
                                placeholder="Search Order">
                        </div>
                    </div>
                </form>
            </div>
            <!-- order list -->
            <div class="col-12 mt-n3">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Billing Address</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody id="orders">
                        <!-- ajax request for orders/transactions -->
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div class="col-12 d-flex justify-content-center">
                <nav>
                    <ul class="pagination">
                        <form id="pagination_pages">
                            <div class="form-group row">
                                <?php for ($page = 1; $page <= $number_of_pages; $page++): ?>
                                <li class="page-item">
                                    <input class="page_number page-link" type="submit" value="<?=$page?>">
                                </li>
                                <?php endfor;?>
                            </div>
                        </form>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>
