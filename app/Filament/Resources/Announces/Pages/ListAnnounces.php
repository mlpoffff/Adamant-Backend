<?php

namespace App\Filament\Resources\Announces\Pages;

use App\Filament\Resources\Announces\AnnounceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAnnounces extends ListRecords
{
    protected static string $resource = AnnounceResource::class;

    public function getSubheading(): ?string
    {
        return 'На этой странице вы можете управлять анонсами. (Плашка с этой иформацией будет отображаться на всех страницах)';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
