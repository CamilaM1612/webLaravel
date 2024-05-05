@extends('cabecera')
@section('contenido')
    <div>
        <h2>{{ $carrera->NOMBRECARRERA }}</h2>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Subir materias
        </button>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('upload.csv') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="codigoCarrera" class="form-label">Codigo Carrera</label>
                                <input class="form-control" type="text" id="codigoCarrera" name="codigoCarrera"
                                    value="{{ $carrera->CODIGOCARRERA }}">
                            </div>
                            <div class="mb-3">
                                <label for="csv_materia" class="form-label">Archivo CSV</label>
                                <input class="form-control" type="file" id="csv_materia" name="csv_materia">
                            </div>
                            <button type="submit">Subir CSV</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <h1>Materias de {{ $carrera->NOMBRECARRERA }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Código de Materia</th>
                <th>Nivel</th>
                <th>Nombre de Materia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
            <tr>
                <td>{{ $materia->CODIGOMATERIA }}</td>
                <td>{{ $materia->NIVEL }}</td>
                <td>{{ $materia->NOMBREMATERIA }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
