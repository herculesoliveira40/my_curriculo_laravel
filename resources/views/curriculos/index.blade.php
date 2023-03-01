@extends('layouts.main')
@section('title', 'Curriculos')

@section('content')
    <h1> Curriculos <a href="{{ route('curriculos.create') }}"> +</a></h1>
    <div>
        <form action="{{ route('curriculos.index')}}" method="get"> 
            <input type="text" name="search" placeholder="Pesquisar Nome ou ID" >
            <button class="btn btn-outline-primary" > Pesquisar </button>
            <h3 class="text-warning">Buscar por: {{request()->input('search')}}</h3>
        </form>
    </div>
    @include('curriculos._partials.table')
    
    <div> 
        {{ $curriculos->appends([
            'search' => request()->get('search', '')
        ])->links('pagination::bootstrap-5') }}   <!-- underfly OR Provider= Paginator::useBootstrapFive(); -->  
    </div> 

@endsection
