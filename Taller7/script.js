$(document).ready(function() {
    // Realizar la solicitud AJAX para obtener los datos del JSON
    $.ajax({
        url: 'https://jsonplaceholder.typicode.com/users',
        dataType: 'json',
        success: function(data) {
            // Recorrer los datos y mostrarlos en la grilla
            $.each(data, function(index, item) {
                $('#dataTable tbody').append('<tr>' +
                    '<td>' + item.id + '</td>' +
                    '<td>' + item.name + '</td>' +
                    '<td>' + item.username + '</td>' +
                    '<td>' + item.email + '</td>' +
                    '<td>' + item.phone + '</td>' +
                    '<td>' + item.website + '</td>' +
                    '<td>' + item.company.name + '</td>' +
                    '</tr>');
            });
        }
    });

    // Agregar funcionalidad de filtrado
    $('#searchInput').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#dataTable tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
