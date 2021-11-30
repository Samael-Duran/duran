$('document').ready(function (){
    $('#BtnSalir').click(CerrarSesion);
    });
    function CerrarSesion(){
        $(location).attr('href',"./Login.html");
    };