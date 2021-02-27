$(document).ready(function () {
    // mostra campo texto
    $('#campo2').hide();
    $('#campo1').change(function () {
        if ($('#campo1').val() != 'outros') {
            $('#campo2').show();

                $.ajax({
                    url: 'include/getModelos.php?marca='+$('#campo1').val(),
                    success: function (data) {
                        $('#campo2').html(data);
                    },
                    dataType: 'html'
                });         

        } else {
            $('#campo2').hide();
        }
    });
    // fim mostra campo texto
});