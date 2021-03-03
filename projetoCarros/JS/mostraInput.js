$(document).ready(function() {
    // mostra campo texto
    $('#outraMarca').hide();
    $('#marca').change(function() {
        if ($('#marca').val() == 'outros') {
            $('#outraMarca').show();
            $('input[name="outraMarca"]').prop('required',true);
        } else {
            $('#outraMarca').hide();
            $('input[name="outraMarca"]').prop('required',false);
        }
    });
    // fim mostra campo texto
});