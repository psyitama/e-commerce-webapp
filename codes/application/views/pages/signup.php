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
            <div class=" col-md-6">
                <form>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="text-center pb-2 mb-5">

                        <button type="submit" class="btn bg-gold mb-4 waves-effect waves-light">Sign in</button>

                        <p>Already have an account?<a href="">Sign in</a></p>

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
                </form>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="bg-dark text-secondary text-center mt-5 py-3">© 2021 Copyright:
        <a href="https://village88.com/"> village88.com</a>
    </div>
</footer>
