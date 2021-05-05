$(document).ready(function () {
    const BASE_URL = 'http://localhost/codes/';

    fetchProducts();

    //GET PRODUCTS SELLER
    function fetchProducts() {
        $.get(BASE_URL + '/sellers/products_partial', function (res) {
            $('#products').html(res);
        });
    }

    //GET CATEGORIES SELLER
    $.get(BASE_URL + '/sellers/prod_categories_partial', function (res) {
        $('#categories').html(res);
    });

    //Form Events
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
    $(document).on('click', '.update-modal, .delete-modal', function (e) {
        var _self = $(this);

        var selectedRowId = _self.data('id');

        console.log(selectedRowId);

        $('#update_id').val(selectedRowId);
        $('#delete_id').val(selectedRowId);
    });
});
