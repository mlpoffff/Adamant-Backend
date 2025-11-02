<?php

namespace App\Filament\Resources\Prices\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PriceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Название')
                    ->required(),
                Textarea::make('description')->label('Описание')
                    ->columnSpanFull(),
                TextInput::make('price_from')
                    ->label('Стоимость от')
                    ->required()
                    ->numeric()
                    ->step(0.01)
                    ->prefix('₽'),
                TextInput::make('price_to')
                    ->label('Стоимость до')
                    ->numeric()
                    ->step(0.01)
                    ->prefix('₽')
                    ->helperText('Если указано значение, будет отображен диапазон цен'),
                Select::make('category_id')->label('Категория')
                    ->relationship('category', 'title')
                    ->required(),
            ]);
    }
}
