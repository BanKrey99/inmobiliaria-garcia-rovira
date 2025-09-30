<?php

namespace App\Filament\Resources\TipoInmuebles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TipoInmuebleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('nombre')
                    ->label('Tipo de Inmueble')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
