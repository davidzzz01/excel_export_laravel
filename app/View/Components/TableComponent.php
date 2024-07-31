<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableComponent extends Component
{
   public $registros;
    public function __construct($registros)
    {
        $this->registros=$registros;
    }

 
    public function render(): View|Closure|string
    {
        return view('components.table-component');
    }
}
