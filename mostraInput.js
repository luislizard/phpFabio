$(document).ready(function() {
    // mostra campo texto
    $('#campo2').hide();
    $('#campo1').change(function() {
        if ($('#campo1').val() == 'outros') {
            $('#campo2').show();
        } else {
            $('#campo2').hide();
        }
    });
    // fim mostra campo texto
});