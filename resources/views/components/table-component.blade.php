<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <table class="table table-hover table-bordered table-striped table-condensed">
        <thead>
            <tr>
                <th class="bg-primary text-light">ID</th>
                <th class="bg-primary text-light">Nome</th>
                <th class="bg-primary text-light">Quantidade</th>

                <th class="bg-primary text-light">Data da Venda</th>
                <th class="bg-primary text-light">Preço (R$)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td style="text-align: justify">{{ $registro->nome_produto }}</td>
                    <td style="width: 100px;">{{ $registro->quantidade }}</td>

                    <td style="width: 180px;">{{ $registro->data_venda_br }}</td>
                    <td style="width: 140px; text-align:right;">{{ $registro->preco }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>