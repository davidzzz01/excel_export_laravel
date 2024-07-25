<?php

namespace App\Http\Controllers;

use App\Exports\VendasExport;
use App\Models\Venda;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\PDF;
class VendasController extends Controller
{

    public function index(){

        $registros = Venda::all();
        $registros=Venda::paginate('10');
        foreach ($registros as $registro){
            $registro->data_venda_br= date('d/m/Y', strtotime($registro->data_venda));
            $registro->preco= number_format($registro->preco, 2, ',', '.');
        }


        return view('index', compact('registros'));
}


        public  function exportExcel(){

        return Excel::download(new VendasExport(), 'vendas.xlsx');
}


public function gerarPDF() {

    $registros = Venda::all();
    $registros=Venda::paginate('50');
  
    foreach ($registros as $registro) {
    
        $registro->data_venda_br = date('d/m/Y', strtotime($registro->data_venda));
    
        $registro->preco = number_format($registro->preco, 2, ',', '.');
    }



    $pdf = Pdf::loadView('index', compact('registros'));


    return $pdf->download('relatório.pdf');
}
public function buscarRegistro(Request $request) {
    $nome_do_produto = $request->input('produto', ''); 

    $registros = Venda::where('nome_produto', 'like', '%' . $nome_do_produto . '%')
        ->orderByDesc('created_at')
        ->paginate(10)
        ->withQueryString();

    return view('index', compact('registros', 'nome_do_produto'));
}







    }


