<?php

namespace App\Filament\Resources\Announces\Pages;

use App\Filament\Resources\Announces\AnnounceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnnounces extends ListRecords
{
    protected static string $resource = AnnounceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
