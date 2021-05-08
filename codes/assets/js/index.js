$(document).ready(function () {
    const BASE_URL = 'http://localhost/codes/';

    //Init
    fetchProducts();
    fetchCategories();
    fetchCartQty();
    fetchOrders();

    //Get all products (for sellers)
    function fetchProducts() {
        $.get(BASE_URL + '/sellers/products_partial', function (res) {
            $('#products').html(res);
            console.log(res);
        });
    }

    //Get product categories (for sellers)
    function fetchCategories() {
        $.get(BASE_URL + '/sellers/prod_categories_partial', function (res) {
            $('#categories').html(res);
        });
    }

    //Get cart's qty (for customers)
    function fetchCartQty() {
        $.get(BASE_URL + '/customers/cart_qty_partial', function (res) {
            $('#cart_qty').html(res);
        });
    }

    //Get all customer's orders
    function fetchOrders() {
        $.get(BASE_URL + '/sellers/order_partial', function (res) {
            $('#orders').html(res);
        });
    }

    //Add, Update and Delete Product form events
    $(document).on(
        'submit',
        '#add_form, #update_form, #delete_form',
        function (e) {
            e.preventDefault();

            // Serialize the entire form:
            var data = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function (response) {
                    $('#products').html(response);
                    $('input[type=text], input[type=number], textarea').val('');
                },
                error: function (response) {
                    alert(response);
                }
            });
            $('#addModal, #updateModal, #deleteModal').modal('hide');
        }
    );

    //Get the target row ID for delete and update modals
    $(document).on('click', '.update-modal, .delete-modal', function () {
        var _self = $(this);

        var selectedRowId = _self.data('id');

        console.log(selectedRowId);

        $('#update_id').val(selectedRowId);
        $('#delete_id').val(selectedRowId);
    });

    //related items carousel
    $('#carouselExampleFade').carousel();

    //add to cart form
    $(document).on('submit', '#add_item', function () {
        $.post($(this).attr('action'), $(this).serialize(), function (res) {
            $('#cart_qty').html(res);
        });
        return false;
    });

    //add to cart events
    $('.cart-failed').hide();
    $('.cart-success').hide();
    $(document).on('click', '#add_cart_btn', function () {
        if ($('#item_qty').val() == '' || $('#item_qty').val() == 0) {
            $('.cart-failed')
                .fadeTo(2000, 500)
                .slideUp(500, function () {
                    $('.cart-failed').slideUp(500);
                });
        } else {
            //add to cart success
            $('.cart-success')
                .fadeTo(2000, 500)
                .slideUp(500, function () {
                    $('cart-success').slideUp(500);
                });
            $('#add_item').submit();
        }
    });

    //same as shipping event
    $('#same_as_chk').click(function () {
        if ($(this).prop('checked') == true) {
            $('#b_address').val($('#s_address').val());
            $('#b_city').val($('#s_city').val());
            $('#b_state').val($('#s_state').val());
            $('#b_zip').val($('#s_zip').val());
        } else if ($(this).prop('checked') == false) {
            $('#b_address').val('');
            $('#b_city').val('');
            $('#b_state').val('');
            $('#b_zip').val('');
        }
    });
}); //end of script file
