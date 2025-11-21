<?php

namespace App\Filament\Resources\Pedidos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
class PedidoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Select::make('cliente_id')
                    ->relationship(name: 'cliente', titleAttribute: 'nombre_completo')
                    ->required()
                   ,
                TextInput::make('total')
                    ->required()
                    ->numeric(),
                DatePicker::make('fecha')
                    ->required(),
                Select::make('estatus')
                 ->options([
                 'pendiente' => 'Pendiente',
                 'entregado' => 'Entregado',
                 
    ])
            ]);
    }
}
