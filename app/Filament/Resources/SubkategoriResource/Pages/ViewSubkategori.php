<?php

namespace App\Filament\Resources\SubkategoriResource\Pages;

use App\Filament\Resources\SubkategoriResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSubkategori extends ViewRecord
{
    protected static string $resource = SubkategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
