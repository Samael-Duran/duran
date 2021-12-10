$('document').ready(function () {

    $("#BtnConsulta").click(function () {
        $('input').val('');
        var vidu = prompt("ID de Usuario:");

        $.post('./php/Consulta.php',
                {idUsuario: vidu},
                function (ret) {
                if (ret['resultado'] == 0) {

                console.log("Error");

                }
                else {

                console.log(ret);
                console.log(ret.detalle);
                console.log(ret.detalle.Nombre);
                console.log(ret.detalle.Correo);


                $('#idU').val(ret.detalle.idUsuario);
                $('#Nom').val(ret.detalle.Nombre);
                $('#CorrElec').val(ret.detalle.Correo);
                $('#Pass').val(ret.detalle.PSWD); 
                $('#CallPrin').val(ret.detalle.CalleP);   
                $('#NumViv').val(ret.detalle.NumExt); 

            }
        },'json');

    });

    $("#BtnAgregar").click(function () {
        var vnom = $('#Nom').val();
        var vcrr = $('#CorrElec').val();
        var vpss = $('#Pass').val();
        var vcll = $('#CallPrin').val();
        var vnue = $('#NumViv').val();
        console.log('Entro a la funcion');
        $.post('./php/Grabar.php', {nom: vnom, crr: vcrr, pss: vpss, cll: vcll, nue: vnue},
                function (ret) {
                 //console.log("Error Grabar");
                console.log(ret.resultado);
                if (ret['resultado'] == 0) {

                console.log('Registro Correcto');

                }
                else {
                console.log("Error");
                console.log(ret['mensaje']);
            }
        },
        'json'
        );
    });

    $('#BtnEliminar').click( function() {
        var vid = $('#idU').val();

        if (confirm('Borrar')) {
            $.post('./php/Borrar.php',
            {idUsuario: vid},
            function (ret) {
                alert("Borrado");
            },'json');
        } else {
            alert("No se borra");
        }
    });

});