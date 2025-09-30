<?php

namespace App\Filament\Resources\TipoInmuebles\Pages;

use App\Filament\Resources\TipoInmuebles\TipoInmuebleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTipoInmueble extends CreateRecord
{
    protected static string $resource = TipoInmuebleResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
