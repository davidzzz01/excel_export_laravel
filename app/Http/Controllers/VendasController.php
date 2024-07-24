<?php

namespace App\Http\Controllers;

use App\Exports\VendasExport;
use App\Models\Vendas;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class VendasController extends Controller
{

    public function index(){

        $registros = Vendas::all();
        $registros=Vendas::paginate('10');
        foreach ($registros as $registro){
            $registro->data_venda_br= date('d/m/Y', strtotime($registro->data_venda));
            $registro->preco= number_format($registro->preco, 2, ',', '.');
        }


        return view('index', compact('registros'));
}


        public  function exportExcel(){

        return Excel::download(new VendasExport(), 'vendas.xlsx');
}


    }

