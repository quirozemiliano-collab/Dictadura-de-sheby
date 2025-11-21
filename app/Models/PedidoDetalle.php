<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoDetalle extends Model
{
    protected $fillable = ['pedido_id', 'producto_id', 'nombre', 'cantidad', 'subtotal'];

    //Un PedidoDetalle pertenece a un Pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    //Un Producto pertenece a un PedidoDetalle
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
