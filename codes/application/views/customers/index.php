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
                        <a href="<?=base_url()?>" class="nav-link navbar-link-2 waves-effect">
                            <span class="badge badge-danger">1</span>
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
                        <a href="<?=base_url()?>" type="button"
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
                <a href="#" class="list-group-item list-group-item-action"><?=$category['category']?></a>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-3 mt-1">
                    <div class="card">
                        <img src="<?=base_url() . 'assets/images/shirt.png'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Belt</p>
                            <p class="font-weight-bold">$111</p>
                            <a href="#" class="btn btn-gold">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-1">
                    <div class="card">
                        <img src="<?=base_url() . 'assets/images/shirt.png'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Belt</p>
                            <p class="font-weight-bold">$111</p>
                            <a href="#" class="btn btn-gold">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-1">
                    <div class="card">
                        <img src="<?=base_url() . 'assets/images/shirt.png'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Belt</p>
                            <p class="font-weight-bold">$111</p>
                            <a href="#" class="btn btn-gold">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-1">
                    <div class="card">
                        <img src="<?=base_url() . 'assets/images/shirt.png'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Belt</p>
                            <p class="font-weight-bold">$111</p>
                            <a href="#" class="btn btn-gold">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-1">
                    <div class="card">
                        <img src="<?=base_url() . 'assets/images/shirt.png'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Belt</p>
                            <p class="font-weight-bold">$111</p>
                            <a href="#" class="btn btn-gold">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-1">
                    <div class="card">
                        <img src="<?=base_url() . 'assets/images/shirt.png'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Belt</p>
                            <p class="font-weight-bold">$111</p>
                            <a href="#" class="btn btn-gold">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-1">
                    <div class="card">
                        <img src="<?=base_url() . 'assets/images/shirt.png'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Belt</p>
                            <p class="font-weight-bold">$111</p>
                            <a href="#" class="btn btn-gold">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-1">
                    <div class="card">
                        <img src="<?=base_url() . 'assets/images/shirt.png'?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Belt</p>
                            <p class="font-weight-bold">$111</p>
                            <a href="#" class="btn btn-gold">Buy</a>
                        </div>
                    </div>
                </div>
            </div> <!-- end of child row -->
        </div>
    </div> <!-- end of parent row -->
</div>

<footer>
    <div class="bg-dark text-secondary text-center mt-5 py-3">© 2021 Copyright:
        <a href="https://village88.com/"> village88.com</a>
    </div>
</footer>
