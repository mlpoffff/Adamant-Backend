<?php

namespace App\Filament\Resources\Licenses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LicenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('license_text')->label('Текст лицензии')
                    ->required(),
            ]);
    }
}
