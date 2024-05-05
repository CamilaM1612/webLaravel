@section('content')
    <link rel="stylesheet" href="{{ asset('css/pensum.css') }}">
    @extends('pages.navbar')

    <div class="container-fluid">

        <h1 class="text-center">Pensum</h1>
        <button class="btn-impresion"><i class="bi bi-printer-fill"></i></button>


        <div class="rotated-text">1° Semestre</div>

        <table class="table table-borderless">

            <tbody>
                <tr>
                    <span class="semestre">1 semestre (Nivel A)</span>
                    <td></td>

                </tr>


            </tbody>
        </table>

    </div>
@endsection
