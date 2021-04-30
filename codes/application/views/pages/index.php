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
                        <a href="#!" class="nav-link navbar-link-2 waves-effect">
                            <span class="badge badge-danger d-inline-block align-top mt-1">1</span>
                            <i class="material-icons">
                                shopping_cart
                            </i>
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
                        <a href="<?=base_url() . 'pages/signup'?>" type="button"
                            class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign
                            up</a>
                    </li>
                </ul>
            </div>
            <!-- Links -->
        </div>
    </nav>
    <!-- Navbar -->
    <div class="d-flex align-items-center h-100 bg-light">
        <div class="container text-center py-5">
            <h3 class="mb-0">Sign in</h3>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=" col-md-6 mt-3">
                <?php if ($this->session->flashdata('login_error') != null): ?>
                <div class="alert alert-danger text-center" role="alert">
                    <?=$this->session->flashdata('login_error')?>
                </div>
                <?php endif;?>
                <?=form_open('pages/login')?>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="text-center pb-2 mt-3">
                    <input type="submit" class="btn bg-gold mb-4 waves-effect waves-light" value="Sign in">
                    <p>Not a member? <a href="<?=base_url() . 'signup'?>">Register</a></p>
                    <p>or sign up with:</p>
                    <a type="button" class="btn-floating btn-fb btn-sm mr-1">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm mr-1 text-info">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm mr-1">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm text-dark">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="bg-dark text-secondary text-center mt-5 py-3">© 2021 Copyright:
        <a href="https://village88.com/"> village88.com</a>
    </div>
</footer>
