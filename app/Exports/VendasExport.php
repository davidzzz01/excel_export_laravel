<?php

namespace App\Exports;

use App\Models\Venda;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VendasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Venda::all();
    }

    public function headings(): array
    {
        // Define os cabeçalhos da tabela
        return [
            'ID',
            'Nome do Produto',
            'Quantidade',
            'Preço',
            'Data da Venda',
        ];
    }
}
