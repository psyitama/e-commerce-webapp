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
                            class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign
                            in</a>
                    </li>
                </ul>
            </div>
            <!-- Links -->
        </div>
    </nav>
    <!-- Navbar -->
    <div class="d-flex align-items-center h-100 bg-light">
        <div class="container text-center py-5">
            <h3 class="mb-0">Sign up</h3>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class=" col-md-6 mt-3">
                <?=form_open('pages/register')?>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email">
                    <span class="text-danger"><?=$this->session->flashdata('email')?></span>
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name">
                    <span class="text-danger"><?=$this->session->flashdata('first_name')?></span>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name">
                    <span class="text-danger"><?=$this->session->flashdata('last_name')?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                    <span class="text-danger"><?=$this->session->flashdata('password')?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password">
                    <span class="text-danger"><?=$this->session->flashdata('confirm_password')?></span>
                </div>
                <div class="row justify-content-md-center">
                    <div class="custom-control custom-radio row custom-control-inline">
                        <input type="radio" id="customerRadio" name="user_level" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="customerRadio">Customer</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sellerRadio" name="user_level" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="sellerRadio">Seller</label>
                    </div>
                </div>
                <span class="text-danger"><?=$this->session->flashdata('user_level')?></span>

                <div class="text-center pb-2 mt-3">
                    <input type="submit" class="btn bg-gold mb-4 waves-effect waves-light" value="Sign up">
                    <p>Already have an account? <a href="<?=base_url()?>">Sign in</a></p>
                    <p>or sign in with:</p>
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
