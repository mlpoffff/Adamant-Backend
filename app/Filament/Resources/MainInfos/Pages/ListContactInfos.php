<?php

namespace App\Filament\Resources\MainInfos\Pages;

use App\Filament\Resources\MainInfos\MainInfoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactInfos extends ListRecords
{
    protected static string $resource = MainInfoResource::class;

    public function getSubheading(): ?string
    {
        return 'На этой странице вы можете контактной информацией. (Записи отображаются на странице с контактной информацией и в подвале сайта)';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
