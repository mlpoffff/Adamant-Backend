<?php

namespace App\Filament\Resources\Announces\Pages;

use App\Filament\Resources\Announces\AnnounceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAnnounce extends EditRecord
{
    protected static string $resource = AnnounceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
