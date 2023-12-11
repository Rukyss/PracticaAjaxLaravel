<!DOCTYPE html>
<html>
<head>
    <title>Vista para AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<button id="botonAnimales">Obtener Animales</button>

<div id="resultado"></div>

<script>
$(document).ready(function(){
    $('#botonAnimales').on('click', function(){
        $.ajax({
            url: "http://127.0.0.1:8000/dameAnimales", 
            type: 'GET',
            success: function(response) {
                console.log(response); 
                $('#resultado').html('<p>' + response.mensaje + '</p><ul>');
                $.each(response.datos, function(index, value) {
                    $('#resultado ul').append('<li>' + value + '</li>');
                });
                $('#resultado').append('</ul>');
            },
            error: function(xhr, status, error) {
                console.error(error); // Manejo de errores
                $('#resultado').html('<p>Ocurrió un error al obtener los animales.</p>');
            }
        });
    });
});
</script>

</body>
</html>
