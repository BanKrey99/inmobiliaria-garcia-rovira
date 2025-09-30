<?php

namespace App\Filament\Resources\Ciudads\Pages;

use App\Filament\Resources\Ciudads\CiudadResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Cache\Events\RetrievingKey;

class CreateCiudad extends CreateRecord
{
    protected static string $resource = CiudadResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
