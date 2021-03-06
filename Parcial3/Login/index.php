<!DOCTYPE html>
<html>
<?php
session_start();
if ( !isset($_SESSION['Correo']) || empty($_SESSION['Correo']) ) {
    header("Location:./Login.html");
}
?>
    <head>
        <meta charset= "utf-8">
        <meta name= "viewport" content="widt=device-width, initial-scale=1, shrink-to-fit=n0">
        <link rel= "stylesheet" href="CSS/Form Estilos.css"/>
        <title>FormularioBoot</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="./resources/jquery/jquery-1.11.3.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="./js/DesLog.js"><script>
        <script src="./js/Log.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 id="Titulo">Datos estudiante</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4" id="Estudiante">
                            <form>
                                <h4>Datos personales</h4>
                                <label>Edad</label>
                                <input type="number" name="Edad" class="form-control" required>
                    
                                <labe>Nombre</labe>
                                <input type="text" name="nombre" class="form-control" required>
                    
                                <label>Genero</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio" id="Masculino" value="Masculino" >
                                    <label class="form-check-label" for="Masculino">
                                      Masculino
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio" id="Femenino" value="Femenino">
                                    <label class="form-check-label" for="Femenino">
                                      Femenino
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Radio" id="Otro" value="Otro" checked>
                                    <label class="form-check-label" for="Otro">
                                      Otro
                                    </label>
                                  </div>
                                <label>Correo Electronico</label>
                                <input type="text" name="CorreroElec" class="form-control" required>
                                <label>Contrasena</label>
                                <input type="text" name="Cont" class="form-control" required>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4" id="Domicilio">
                            <h4>Domicilio</h4>
                            <form>
                                <label>Calle Principal</label>
                                <input type="text" name="CP" class="form-control" required>
                                <label>Numero Exterior</label>
                                <input type="text" name="NE" class="form-control" required>
                                <label>Numero Interior</label>
                                <input type="text" name="NI" class="form-control" >
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4" id="Carrera">
                            <h4>Datos de la Carrera</h4>
                            <form>
                                <label>Carrera</label>
                                <select name="carrera" class="form-control">
                                    <option value="Arq">Arquitectura</option>
                                    <option value="Scmp">Sistemas computacionales</option>
                                    <option value="Elec">Electronica</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col" id="Boton">
                        <button type="button" id="BtnSalir" class="btn btn-lg btn-primary btn-block">Salir<span class="glyphicon glyphicon-log-in"></span></button>
                        <button type="button" id="BtnEnviar" class="btn btn-lg btn-primary btn-block">Envair<span class="glyphicon glyphicon-log-in"></span></button>
                    </div>
                </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </body>
</html>