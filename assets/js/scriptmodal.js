$(function () {

    $('.tombolTambahData').on('click', function () {
        $('#addMenuModalLabel').html('Add New Menu');
        $('.modal-footer button[type=submit]').html('Submit');
        $('#id').val("");
        $('#menu').val("");
        $('.modal-body form').attr('action', 'http://localhost/login-app/menu');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#addMenuModalLabel').html('Edit Menu');
        $('.modal-footer button[type=submit]').html('Save Changes');
        $('.modal-body form').attr('action', 'http://localhost/login-app/menu/editmenu');
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/login-app/menu/getMenuByID',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#menu').val(data.menu);
            }
        })



    });
});