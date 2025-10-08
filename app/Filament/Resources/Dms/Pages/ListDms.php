<?php

namespace App\Filament\Resources\Dms\Pages;

use App\Filament\Resources\Dms\DmsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDms extends ListRecords
{
    protected static string $resource = DmsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
