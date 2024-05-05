@extends('cabecera')

<link rel="stylesheet" href="{{ asset('css/carrera.css') }}">
@section('contenido')

    <h1>Carreras</h1>


    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevaCarrera">
        <i class="bi bi-plus-circle-fill"></i> Nueva carrera
    </button>

    <div class="modal fade" id="nuevaCarrera" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="nuevaCarreraLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nueva Carrera</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('registrar.carrera') }}" method="POST" class="p-2">
                        @csrf
                        <div class="mb-3">
                            <label for="codigoCarrera" class="form-label">Codigo de carrera</label>
                            <input type="text" class="form-control" id="codigoCarrera" name="codigoCarrera">
                        </div>
                        <div class="mb-3">
                            <label for="nombreCarrera" class="form-label">Carrera</label>
                            <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera"
                                maxlength="50">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container-fluid">
        @foreach ($carreras as $carrera)
            <div id="carrera">
                <a href="{{ route('show.materia', ['codigoCarrera' => $carrera->CODIGOCARRERA]) }}">{{ $carrera->NOMBRECARRERA }}</a>
                <span>({{ $carrera->CODIGOCARRERA }})</span>
            </div>
        @endforeach
    </div>
@endsection
