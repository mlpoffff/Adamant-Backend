<?php

namespace App\Filament\Resources\Dms\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DmsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Название')
                    ->required(),
                TextInput::make('link')->label('Ссылка')
            ]);
    }
}
