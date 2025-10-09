<?php

namespace App\Filament\Resources\ContactInfos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactInfoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('title')
                    ->label('Категория')
                    ->options([
                        'email' => 'Email',
                        'phone' => 'Телефон',
                        'adress' => 'Адрес',
                        'license' => 'Лицензия',
                        'yaMap' => 'Ссылка на яндекс карту',
                    ])
                    ->required(),
                TextInput::make('info')->label('Значение')
                    ->required(),
            ]);
    }
}
