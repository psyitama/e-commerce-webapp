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
                        <a href="<?=base_url() . 'dashboard/products'?>" class="nav-link waves-effect active">
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
            <div class="col-6">
                <!-- searchbox -->
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search product"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><i class="material-icons">search</i></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 text-right">
                <!-- Button trigger modal -->
                <a type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#addModal">
                    Add new product
                </a>
            </div>
            <div class="col">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Picture</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Inventory Count</th>
                            <th scope="col">Quantity Sold</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody id="products">
                        <!-- AJAX request for products -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Add Product Modal -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?=form_open_multipart('sellers/add_product', 'id="add_form"')?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="product" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="product" name="product"
                        value="<?=set_value('product')?>">
                    <?=form_error('product')?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Description:</label>
                    <textarea class="form-control" id="description"
                        name="description"><?=set_value('description')?></textarea>
                    <?=form_error('description')?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                        value="<?=set_value('price')?>">
                    <?=form_error('price')?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Inventory Count:</label>
                    <input type="number" class="form-control" id="inventory_count" name="inventory_count"
                        value="<?=set_value('inventory_count')?>">
                    <?=form_error('inventory_count')?>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="categories">Categories</label>
                    </div>
                    <select class="custom-select" id="categories" name="categories">
                        <!-- AJAX request for product categories -->
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="custom-file-label" for="image">Images</label>
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <input type="file" class="custom-file-input" name="file" id="filezz">
                    <?php if (isset($upload['error'])): ?>
                    <span class="text-danger"><?=$upload['error']?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
            <?=form_close()?>
        </div>
    </div>
</div>

<!-- Update Product Modal -->
<div class="modal fade" id="updateModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?=form_open_multipart('sellers/add_product', 'id="update_form"')?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="product" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="product" name="product"
                        value="<?=set_value('product')?>">
                    <?=form_error('product')?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Description:</label>
                    <textarea class="form-control" id="description"
                        name="description"><?=set_value('description')?></textarea>
                    <?=form_error('description')?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                        value="<?=set_value('price')?>">
                    <?=form_error('price')?>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Inventory Count:</label>
                    <input type="number" class="form-control" id="inventory_count" name="inventory_count"
                        value="<?=set_value('inventory_count')?>">
                    <?=form_error('inventory_count')?>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="categories">Categories</label>
                    </div>
                    <select class="custom-select" id="categories" name="categories">
                        <!-- AJAX request for product categories -->
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="custom-file-label" for="image">Images</label>
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <?php if (isset($upload['error'])): ?>
                    <span class="text-danger"><?=$upload['error']?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="hidden" name="id" id="update_id" value="">
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
            <?=form_close()?>
        </div>
    </div>
</div>


<!-- Delete Product Modal -->
<div class="modal" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this product?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <?=form_open('sellers/delete_product', 'id="delete_form"')?>
                <input type="hidden" name="id" id="delete_id" value="">
                <input type="submit" class="btn btn-danger" value="Delete">
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>
