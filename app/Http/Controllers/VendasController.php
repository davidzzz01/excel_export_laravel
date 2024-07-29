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
        $qtd_registros=count($registros);
        $registros=Venda::paginate('10');
      
       
        

        return view('index', compact('registros','qtd_registros'));
}


        public  function exportExcel(){

        return Excel::download(new VendasExport(), 'vendas.xlsx');
}


public function gerarPDF() {

    $registros = Venda::all();
    $totalGeral = 0;
    
    foreach ($registros as $registro) {
        $preco_br = floatval($registro->preco);
        $totalGeral += $registro->quantidade * $preco_br;
    }
    
   
    $totalGeralFormatado = number_format($totalGeral, 2, ',', '.');
    
    $pdf = Pdf::loadView('relatorio', compact('registros', 'totalGeralFormatado'));
    
    


    return $pdf->download('relatório.pdf');
}

public function buscarRegistro(Request $request) {
    $nome_do_produto = $request->input('produto', ''); 
    
    $registros = Venda::where('nome_produto', 'like', '%' . $nome_do_produto . '%')
        ->orderByDesc('created_at')
        ->paginate(10)
        ->withQueryString();
    
        $qtd_registros=count($registros);
  


    return view('index', compact('registros', 'nome_do_produto','qtd_registros'));
}







    }


