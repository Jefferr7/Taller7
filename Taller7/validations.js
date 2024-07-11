$(document).ready(function() {
    // Calcular edad en base a la fecha de nacimiento
    $('#fechaNacimiento').on('change', function() {
        var birthDate = new Date($(this).val());
        var today = new Date();
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        $('#edad').val(age);
    });

    // Mostrar campo de detalle de enfermedades
    $('#enfermedades').on('change', function() {
        if ($(this).val() === 'si') {
            $('#detalleEnfermedades').show();
        } else {
            $('#detalleEnfermedades').hide();
            $('#tipoEnfermedad').val('');
        }
    });

    // Validar coincidencia de contraseñas
    $('#registroForm').on('submit', function(event) {
        var password = $('#password').val();
        var confirmarContrasena = $('#confirmarContrasena').val();
        if (password !== confirmarContrasena) {
            event.preventDefault();
            alert('Las contraseñas no coinciden.');
        }
    });
});
