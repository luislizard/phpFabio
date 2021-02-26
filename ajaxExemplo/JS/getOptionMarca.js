$(document).ready(function() {
    $.ajax({
        url: 'include/getMarcas.php',
        success: function(data) {
            $('#campo1').append(data);                    
        },
        dataType: 'html'
    });
});