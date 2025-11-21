<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['cliente_id', 'producto_id', 'total', 'fecha', 'estatus'];
    //un pedido pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    
    //un pedido pertenece a un producto
    public function producto()
    {    
    return $this->belongsTo(Producto::class);
    }
    //Un pedido tiene muchos PedidoDetalles
    public function pedidoDetalles()
    {
        return $this->hasMany(PedidoDetalle::class);
    }



}

