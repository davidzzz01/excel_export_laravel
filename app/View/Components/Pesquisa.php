<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pesquisa extends Component
{
   public $registros;
    public function __construct($registros)
    {
        $this->registros=$registros;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pesquisa');
    }
}
