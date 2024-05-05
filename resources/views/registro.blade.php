<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
    <title>TecnoPlanner</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" id='formRegistro'>
                <h2 class="text-center mb-2 text-degrade">Regístrate</h2>
                <form action="{{ route('registrarUsuario') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="campoRegistro form-control" id="nombres" placeholder="Ingrese sus nombres">
                    </div>
                    <div class="form-group">
                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input type="text" class="campoRegistro form-control" id="apellido_paterno" placeholder="Ingrese su apellido paterno">
                    </div>
                    <div class="form-group">
                        <label for="apellido_materno">Apellido Materno</label>
                        <input type="text" class="campoRegistro form-control" id="apellido_materno" placeholder="Ingrese su apellido materno">
                    </div>
                    <div class="form-group">
                        <label for="contrasenia">Contraseña</label>
                        <input type="password" class="campoRegistro form-control" id="contrasenia" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="form-group">
                        <label for="codigo_sis">Código SIS</label>
                        <input type="text" class="campoRegistro form-control" id="codigo_sis" placeholder="Ingrese su código SIS">
                    </div>
                    <div class="form-group">
                        <label for="carrera">Carrera</label>
                        <select class="campoRegistro form-select" id="carrera" aria-label="Default select example">
                            <option selected>Ingrese su carrera</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class='boton'>
                        <button type="submit" class="btn-reg btn btn-primary">Registrarse</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6" id='imagen'>
    
            </div>
        </div>
    </div>
    
</body>
</html>