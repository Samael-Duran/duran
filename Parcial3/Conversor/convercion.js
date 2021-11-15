$(document).ready( function() {

    $("#Convertir").click(presionBoton);
    
    
    function presionBoton() {
        var gra = $("#grados").val();
    
        $.get("Mostrar.php", {grados: gra}, llegadaDatos);
    }
    
    function llegadaDatos(datos) {
        $('#resultado').html('<h3>El resultado es '+datos+'</h3>');
    }
    
    });
    