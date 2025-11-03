<?php

namespace App\Filament\Resources\MainInfos\Pages;

use App\Filament\Resources\MainInfos\MainInfoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditContactInfo extends EditRecord
{
    protected static string $resource = MainInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
