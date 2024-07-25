<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome_produto',
        'quantidade',
        'preco',
        'data_venda'


         


    ];


  
    public function getDataVendaBrAttribute()
    {
        return isset($this->attributes['data_venda']) ? Carbon::parse($this->attributes['data_venda'])->format('d/m/Y') : null;
    }
  
   
   
    public function getPrecoAttribute($preco)
    {
        return number_format($preco, 2, ',', '.');
    }

    protected $appends = ['data_venda_br', 'preco'];
}

