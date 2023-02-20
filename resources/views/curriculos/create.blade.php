@extends('layouts.main')

@section('title', 'Cadastrar Curriculo')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('curriculos.index') }}"> <i class="bi bi-speedometer"></i> Curriculos </a></li>
            <li class="breadcrumb-item active" aria-current="page"> Cadastrar Curriculo</li>
        </ol>
    </nav>
    <h1>Cadastrar Curriculo</h1>

    <div id="event-create-container" class="col-md-6 offset-md-3">
        @include('helpers.alert_error')

        <form action="{{ route('curriculos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf {{-- DIRETIVA Token SALVAR DADOS NO BANCO --}}

                @include('curriculos._partials.form')

        </form>
    </div>
@endsection
