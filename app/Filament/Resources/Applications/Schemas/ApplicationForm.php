<?php

namespace App\Filament\Resources\Applications\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Имя')
                    ->required(),
                TextInput::make('surname')
                    ->label('Фамилия')
                    ->required(),
                TextInput::make('phone_number')
                    ->label('Телефон')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Почта')
                    ->label('Email')
                    ->email()
                    ->required(),
                Select::make('status')
                    ->label('Статус заявки')
                    ->options([
                        'new' => 'Новая',
                        'in_progress' => 'В обработке',
                        'completed' => 'Завершена',
                        'canceled' => 'Отменена'
                    ])
                    ->required(),
                Textarea::make('description')
                    ->label('Описание проблемы')
                    ->columnSpanFull(),
            ]);
    }
}
