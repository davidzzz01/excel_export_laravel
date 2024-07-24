<h1 class="text-center mb-3">Vendas</h1>



<div class="container">

    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th class="bg-primary text-light">ID</th>
            <th class="bg-primary text-light">Nome</th>
            <th class="bg-primary text-light">quantidade</th>
            <th class="bg-primary text-light">Preço  (R$)</th>
            <th class="bg-primary text-light">Data da venda</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($registros as $registro)
            <tr>
                <td>{{ $registro->id }}</td>
                <td>{{ $registro->nome_produto }}</td>
                <td>{{ $registro->quantidade }}</td>
                <td>{{ $registro->preco }}</td>
                <td>{{ $registro->data_venda_br }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center">
        <div>
            {{ $registros->links() }}
        </div>
        <div>
            <a href="{{ route('exportar') }}" class="btn btn-primary mb-2">Exportar Excel</a>
        </div>
    </div>
    
</div>

