<?php

namespace App\Filament\Resources\TipoInmuebles\Pages;

use App\Filament\Resources\TipoInmuebles\TipoInmuebleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTipoInmueble extends EditRecord
{
    protected static string $resource = TipoInmuebleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
