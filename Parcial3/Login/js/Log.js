    $('document').ready(function () {
    $('#BtnEntrar').click(IniciarSesion);
    $('#inputPassword').keypress(function(e) {
            if (e.keyCode == 13 ) { IniciarSesion(); }
    });

    function IniciarSesion() {
        console.log('iniciar sesion');
        var vUsu = $('#inputUsuario').val();
        var vPas = $('#inputPassword').val();
    
        $.post('./php/Log.php', {Correo:vUsu,PSWD:vPas}, function(ret) {

            console.log(ret);
            if (ret['resultado'] == 0) {
                console.log('login correcto');
                $(location).attr("href", "index.php")
            }
            else {
                console.log('login incorrecto');
                console.log(ret);
            }
        },'json');
    }});