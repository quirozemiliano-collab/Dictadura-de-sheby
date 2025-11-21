<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'precio', 'foto', 'estatus'];
  //Un producto aparece en muchos PedidoDetalles
    public function pedidoDetalles()
    {
        return $this->hasMany(PedidoDetalle::class);
    }
}

