<?php

namespace App\Filament\Resources\TipoInmuebles;

use App\Filament\Resources\TipoInmuebles\Pages\CreateTipoInmueble;
use App\Filament\Resources\TipoInmuebles\Pages\EditTipoInmueble;
use App\Filament\Resources\TipoInmuebles\Pages\ListTipoInmuebles;
use App\Filament\Resources\TipoInmuebles\Schemas\TipoInmuebleForm;
use App\Filament\Resources\TipoInmuebles\Tables\TipoInmueblesTable;
use App\Models\TipoInmuble;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TipoInmuebleResource extends Resource
{
    protected static ?string $model = TipoInmuble::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TipoInmuebleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TipoInmueblesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTipoInmuebles::route('/'),
            'create' => CreateTipoInmueble::route('/create'),
            'edit' => EditTipoInmueble::route('/{record}/edit'),
        ];
    }
}
