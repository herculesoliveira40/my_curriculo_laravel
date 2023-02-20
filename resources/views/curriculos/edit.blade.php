@extends('layouts.main')
@section('title', "Edit Curriculo {$curriculo->id}")

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('curriculos.index') }}"> <i class="bi bi-speedometer"></i> Curriculos </a></li>
        <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-pencil-square"></i> Editar Curriculos:
            {{ $curriculo->id }}</li>
    </ol>
</nav>
    <h1> Edit Curriculo: </h1>

    <form action="{{ route('curriculos.update', $curriculo->id) }}" method="post">
        @csrf {{-- DIRETIVA SALVAR DADOS NO BANCO --}}
        @method('PUT')

            @include('curriculos._partials.form')
            
    </form>
@endsection
