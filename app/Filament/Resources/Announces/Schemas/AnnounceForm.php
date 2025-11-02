<?php

namespace App\Filament\Resources\Announces\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AnnounceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('active')->label('Активность')
                    ->required()
                    ->columnSpan('full')
                    ->default(true),
                Textarea::make('description')->label('Информация')
                    ->columnSpan('full')
                    ->required(),
            ]);
    }
}
