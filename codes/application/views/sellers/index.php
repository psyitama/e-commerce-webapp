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
                        <a href="<?=base_url() . 'dashboard'?>" class="nav-link waves-effect active">
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
            <div class="col">
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
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark Carpio</td>
                            <td>Carpio</td>
                            <td>9/6/14</td>
                            <td>Brgy jfasjdkadjkals</td>
                            <td>
                                <form action="">
                                    <select class="custom-select" name="status">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </form>
                            </td>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark Carpio</td>
                            <td>Carpio</td>
                            <td>9/6/14</td>
                            <td>Brgy jfasjdkadjkals</td>
                            <td>
                                <form action="">
                                    <select class="custom-select" name="status">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </form>
                            </td>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark Carpio</td>
                            <td>Carpio</td>
                            <td>9/6/14</td>
                            <td>Brgy jfasjdkadjkals</td>
                            <td>
                                <form action="">
                                    <select class="custom-select" name="status">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </form>
                            </td>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark Carpio</td>
                            <td>Carpio</td>
                            <td>9/6/14</td>
                            <td>Brgy jfasjdkadjkals</td>
                            <td>
                                <form action="">
                                    <select class="custom-select" name="status">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </form>
                            </td>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark Carpio</td>
                            <td>Carpio</td>
                            <td>9/6/14</td>
                            <td>Brgy jfasjdkadjkals</td>
                            <td>
                                <form action="">
                                    <select class="custom-select" name="status">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
