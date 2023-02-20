@extends('layouts.main')
@section('title', 'Curriculos')

@section('content')
    <h1> Curriculos <a href="{{ route('curriculos.create') }}"> +</a></h1>

    @include('curriculos._partials.table')


@endsection
