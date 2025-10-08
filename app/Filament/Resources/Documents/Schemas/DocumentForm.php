<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('image_id')
                    ->relationship('image', 'title')
                    ->searchable()
                    ->preload()
                    ->label('Изображение')
                    ->createOptionForm([
                        TextInput::make('title')
                            ->string()
                            ->label('Название'),
                        FileUpload::make('src')
                            ->label('Изображение')
                            ->image()
                            ->required()
                    ]),
            ]);
    }
}
