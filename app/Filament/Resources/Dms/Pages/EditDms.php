<?php

namespace App\Filament\Resources\Dms\Pages;

use App\Filament\Resources\Dms\DmsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDms extends EditRecord
{
    protected static string $resource = DmsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
