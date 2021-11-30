    $('document').ready(function () {
    $('#BtnEntrar').click(IniciarSesion);
    $('#inputPassword').keypress(function(e) {
            if (e.keyCode == 13 ) { IniciarSesion(); }
    });

    function IniciarSesion() {
        console.log('iniciar sesion');
        var vUsu = $('#inputUsuario').val();
        var vPas = $('#inputPassword').val();
    
            if (vUsu == 'Usuario' && vPas=='1234') 
            {
                $.get("./php/Log.php", {Correo: vUsu,PSWD: vPas});
                $(location).attr('href',"./index.php");

            }
            else {
                console.log('login incorrecto');
            }
    }});