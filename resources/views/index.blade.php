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
        <div >
            <a href="{{ route('exportar') }}" class="btn btn-primary mb-2 mr-2">Exportar Excel</a>
            <a href="{{route('pdf')}}" class="btn btn-danger text-light mb-2 ">Exportar PDF</a>
        </div>
    </div>
    
</div>

<style>

    @import url('{{ public_path('css/bootstrap.min.css') }}');

 
   * {
        font-family: 'Helvetica', sans-serif;
    }
  
.text-center {
    text-align: center !important;
}

.mb-3 {
    margin-bottom: 1rem !important;
}

.container {
    width: 100%;
   
    margin-right: auto;
    margin-left: auto;
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    border-collapse: collapse;
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 0, 0, 0.075);
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
}

.table th,
.table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.bg-primary {
    background-color: #007bff !important;
}

.text-light {
    color: #f8f9fa !important;
}

.d-flex {
    display: flex !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.align-items-center {
    align-items: center !important;
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}

.mr-2 {
    margin-right: 0.5rem !important;
}

.mb-2 {
    margin-bottom: 0.5rem !important;
}

</style>

