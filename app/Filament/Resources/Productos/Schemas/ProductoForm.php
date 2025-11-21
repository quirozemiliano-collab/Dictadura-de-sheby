<?php

namespace App\Filament\Resources\Productos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
class ProductoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                    
                TextInput::make('precio')
                    ->required()
                    ->numeric(),
                Fileupload::make('foto')
                    ->required(),
                Toggle::make('estatus')
                    ->required(),
            ]);
    }
}
