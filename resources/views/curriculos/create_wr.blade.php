@extends('layouts.main')

@section('title', 'Curriculo Sem cadastro')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('curriculos.index') }}"> <i class="bi bi-speedometer"></i> Curriculos </a></li>
            <li class="breadcrumb-item active" aria-current="page"> Curriculo Sem cadastro' </li>
        </ol>
    </nav>
    <h1> Fazer Curriculo Sem cadastro </h1>

    <div id="event-create-container" class="col-md-6 offset-md-3">
        @include('helpers.alert_error')

        <form action="{{ route('curriculos.cwrprint') }}" method="POST" enctype="multipart/form-data">
            @csrf {{-- DIRETIVA Token SALVAR DADOS NO BANCO --}}

                @include('curriculos._partials.form')

        </form>
    </div>
@endsection
