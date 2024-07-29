

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Vendas</title>
   
</head>
<body>
    <h1>Relatório de Vendas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Data da Venda</th>
                <th>Preço (R$)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->nome_produto }}</td>
                    <td>{{ $registro->quantidade }}</td>
                    <td>{{ $registro->data_venda_br }}</td>
                    <td class="text-right">{{$registro->preco}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot style="width: 60px;">
            <tr>
                <td colspan="4" class="text-left">Total</td>
                <td class="text-right">
                    R$ {{$totalGeralFormatado }}
                </td>
            </tr>
        </tfoot>
    </table>
</body>
<style>
    h1{
        text-align: center;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    table, th, td {
        border: 1px solid #000;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #007bff;
        color: white;
    }
    tfoot {
        font-weight: bold;
        background-color: #007bff;
        color:white;
        height: 70px;
    }
    .text-right {
        text-align: right;
    }
</style>
</html>
