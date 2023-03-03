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

        <form action="{{ route('curriculos.index')}}" method="get"> 
            <hr>
            <label for="area"><h3 class="text-warning"> Area: </h3></label>
            <select name="search" id="search" class="form-control" >
                <option value="">*</option>
                <option value="1">Administração, negócios e serviços</option>
                <option value="2">Artes e Comunicação</option>
                <option value="3">Ciências Biológicas e da Terra</option>
                <option value="4">Ciências Exatas</option>
                <option value="5">Ciências Sociais e Humanas</option>
                <option value="6">Engenharia e Produção</option>
                <option value="7">Saúde e Bem-Estar</option>
                <option value="8">Tecnologia</option>
                <option value="9">Outras</option>

            </select> 
            <button class="btn btn-outline-primary" > Pesquisar </button>
        </form>
    </div>
    @include('curriculos._partials.table')
    
    <div> 
        {{ $curriculos->appends([
            'search' => request()->get('search', '')
        ])->links('pagination::bootstrap-5') }}   <!-- underfly OR Provider= Paginator::useBootstrapFive(); -->  
    </div> 

@endsection
