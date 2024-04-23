<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="fondo">
          <div class="col-md-6" id="inicioSesion">
            <img src="{{ asset('images/Union.png') }}" alt="cuadrado" width="60%" />
            <h1 class="bienvenido">Bienvenido</h1>
            <h2 class="tecnoplanner">TecnoPlanner</h2>
    
            <div class="titulo-inicio">
              <h3>Inicio Sesion</h3>
            </div>
            <div class="container-fluid" id="form-inicio">
              <form action="">
                <div class="grupo">
                  <label for="correo">Correo Electrónico</label>
                  <input type="text" name="correoElectronico" id="correo" />
                </div>
                <div class="grupo">
                  <label for="contrasena">Contraseña</label>
                  <input type="password" name="contrasena" id="contrasena" />
                </div>
                <button id="btnIniciarSesion">Iniciar sesión</button>
              </form>
            </div>
          </div>
    
          <div class="col-md-6" id="decoracion">
            <div id="logo">
              <img src="{{ asset('images/logo.png') }}" alt="logoTecno" width="90px" />
            </div>
            <div id="alumno">
              <img src="{{ asset('images/estudianteUniversitario.png') }}" alt="estudiante" width="85%" />
            </div>
          </div>
        </div>
    </div>
    
</body>
</html>