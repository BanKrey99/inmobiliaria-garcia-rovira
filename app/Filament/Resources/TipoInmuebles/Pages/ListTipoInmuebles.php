<?php

namespace App\Filament\Resources\TipoInmuebles\Pages;

use App\Filament\Resources\TipoInmuebles\TipoInmuebleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTipoInmuebles extends ListRecords
{
    protected static string $resource = TipoInmuebleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
