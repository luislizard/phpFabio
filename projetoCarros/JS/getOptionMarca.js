$(document).ready(function() {
    $.ajax({
        url: 'include/getMarcas.php',
        success: function(data) {
            $('#marca').append(data);                    
        },
        dataType: 'html'
    });
});