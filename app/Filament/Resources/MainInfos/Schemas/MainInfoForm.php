<?php

namespace App\Filament\Resources\MainInfos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MainInfoForm
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
                        'address' => 'Адрес',
                        'license' => 'Лицензия',
                        'yaMap' => 'Ссылка на яндекс карту',
                        'vk' => 'Ссылка на Вконтакте',
                        'telegram' => 'Ссылка на Телеграм',
                        'child-slug' => 'Слаг(якорь) на детскую стоматологию',
                        'surgery-slug' => 'Слаг(якорь) на хирургию',
                        'therapy-slug' => 'Слаг(якорь) на терапию',
                    ])
                    ->required(),
                TextInput::make('info')->label('Значение')
                    ->required(),
            ]);
    }
}
