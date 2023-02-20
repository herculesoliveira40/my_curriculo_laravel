@if (count($curriculos) > 0)
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($curriculos as $curriculo)
                <tr>
                    <td scropt="row">{{ $curriculo->id }}</td> 

                    <td><a href="/curriculo/{{ $curriculo->id }}">{{ $curriculo->nome}}</td>

                    <td>
                        <a href="/curriculo/{{ $curriculo->id }}" class="btn btn-info edit-btn">
                            <i class="bi bi-eye-fill"> </i> <i class="bi bi-printer-fill"> </i>
                        </a>

                        @auth
                            <a href="/curriculo/{{ $curriculo->id }}/edit" class="btn btn-warning edit-btn">
                                <i class="bi bi-wrench-adjustable"></i> Editar
                            </a>  
                        @endauth                   
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>    
@else
    <h4>Sem curriculos cadastrados, <a href="{{ route('curriculos.create') }}">Cadastrar </a></h4>
@endif