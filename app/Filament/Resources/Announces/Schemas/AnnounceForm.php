<?php

namespace App\Filament\Resources\Announces\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AnnounceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('description')->label('Информация')
                    ->required(),
                Toggle::make('active')->label('Активность')
                    ->required()
                    ->default(true),
            ]);
    }
}
