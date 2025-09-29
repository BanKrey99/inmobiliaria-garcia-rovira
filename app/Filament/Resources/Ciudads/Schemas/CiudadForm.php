<?php

namespace App\Filament\Resources\Ciudads\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;


class CiudadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('nombre')


            ]);
    }
}
